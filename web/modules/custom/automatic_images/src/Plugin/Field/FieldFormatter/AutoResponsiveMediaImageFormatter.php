<?php

namespace Drupal\automatic_images\Plugin\Field\FieldFormatter;

use Drupal\automatic_images\ImageCropper;
use Drupal\Console\Bootstrap\Drupal;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Field\Annotation\FieldFormatter;
use Drupal\Core\Field\Plugin\Field\FieldType\EntityReferenceItem;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\image\Plugin\Field\FieldFormatter\ImageFormatterBase;
use Drupal\Core\Field\FieldDefinitionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @FieldFormatter(
 *   id = "auto_responsive_media_image",
 *   label = @Translation("Auto Responsive Image"),
 *   field_types = {
 *     "entity_reference"
 *   },
 * );
 */
class AutoResponsiveMediaImageFormatter extends ImageFormatterBase implements ContainerFactoryPluginInterface
{

  protected $imageCropper;

  /**
   * The renderer service.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected $renderer;


  protected $focalPointManager;


  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, $label, $view_mode, array $third_party_settings, ImageCropper $imageCropper, RendererInterface $renderer)
  {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings);
    $this->imageCropper = $imageCropper;
    $this->renderer = $renderer;
    $this->focalPointManager = \Drupal::service('focal_point.manager');
  }


  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
  {
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $configuration['label'],
      $configuration['view_mode'],
      $configuration['third_party_settings'],
      $container->get('automatic_images.image_cropper'),
      $container->get('renderer')
    );
  }


  /**
   * {@inheritdoc}
   */
  public static function defaultSettings()
  {
    return [
        'width' => 4,
        'height' => 3,
        'crop_type' => 'focal_point_scale_and_crop',
      ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state)
  {

    $element = parent::settingsForm($form, $form_state);


    $element['width'] = [
      '#title' => t('Width'),
      '#type' => 'number',
      '#default_value' => $this->getSetting('width'),
      '#description' => t('The width of the crop image ratio.'),
    ];

    $element['height'] = [
      '#title' => t('Height'),
      '#type' => 'number',
      '#default_value' => $this->getSetting('height'),
      '#description' => t('The height of the crop image ratio.'),
    ];

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary()
  {
    $settings = $this->getSettings();

    $width = $settings['width'];
    $height = $settings['height'];

    return ["$width x $height"];

  }


  /**
   * Return list of link type options.
   */
  public function getLinkTypes()
  {
    return [
      'content' => $this->t('Linked to content'),
      'media' => $this->t('Linked to media entity'),
    ];
  }


  /**
   * {@inheritdoc}
   */
  public static function isApplicable(FieldDefinitionInterface $field_definition)
  {
    return $field_definition->getFieldStorageDefinition()
        ->getSetting('target_type') == 'media';
  }


  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode)
  {
    $elements = [];

    // Load referenced media entities.  Return empty render array on failure.
    if (!$media_entities = $this->getEntitiesToView($items, $langcode)) {
      return $elements;
    }

    $width = $this->getSetting('width');
    $height = $this->getSetting('height');

    $ratio = $height / $width;

    foreach ($media_entities as $delta => $media_entity) {

      $uri = $media_entity->field_media_image->entity->getFileUri();
      $alt = $media_entity->field_media_image->alt;


      $mediaId = $media_entity->id();

      $cid = sprintf('automatic_images_srcset_media:%d_crop_%dx%d', $mediaId, $width, $height);

      $srcset = [];

      $widths = [576, 768, 992, 1200];

      if (!(\Drupal::cache()->get($cid) && $srcset = \Drupal::cache()->get($cid)->data)) {
        foreach ($widths as $width) {
          $height = (int)$width * $ratio;
          $srcset[] = $this->imageCropper->cropImage($uri, $width, $height) . ' ' . $width . 'w';
        }
        \Drupal::cache()->set($cid, $srcset);
      }

      $srcsetFirstArr = explode(' ', reset($srcset));
      $srcsetLastArr = explode(' ', end($srcset));

      $elements[$delta] = array(
        '#theme' => 'image',
        '#attached' => [
          'library' => [
            'automatic_images/lazysizes',
          ]
        ],
        '#attributes' => [
          'data-src' => $srcsetLastArr[0],
          'data-srcset' => implode(', ', $srcset),
          'src' => $srcsetFirstArr[0],
          'srcset' => $srcsetFirstArr[0],
          'data-sizes' => 'auto',
          'alt' => $alt,
          'class' => ['img-fluid', 'lazyload', 'blur-up'],
        ]
      );

      $this->renderer->addCacheableDependency($elements[$delta], $this->imageCropper);
      $this->renderer->addCacheableDependency($elements[$delta], $media_entity);
    }
    return $elements;

  }

  /**
   * {@inheritdoc}
   *
   * FileFormatterBase expects $item to be of type
   * \Drupal\file\Plugin\Field\FieldType\FileItem and calls
   * isDisplayed() which is not in EntityReferenceItem.
   */
  protected function needsEntityLoad(EntityReferenceItem $item)
  {
    return !$item->hasNewEntity();
  }

}
