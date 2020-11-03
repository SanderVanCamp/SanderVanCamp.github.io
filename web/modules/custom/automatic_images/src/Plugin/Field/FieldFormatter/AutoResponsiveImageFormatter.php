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
 *   id = "auto_responsive_image",
 *   label = @Translation("Auto Responsive Image"),
 *    field_types = {
 *     "image"
 *   },
 * );
 */
class AutoResponsiveImageFormatter extends ImageFormatterBase implements ContainerFactoryPluginInterface
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

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary()
  {
    return [];
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
    return true;
  }


  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode)
  {

    $elements = [];

    // Load referenced media entities.  Return empty render array on failure.
    if (!$images = $this->getEntitiesToView($items, $langcode)) {
      return $elements;
    }

    $width = $this->getSetting('width');
    $height = $this->getSetting('height');

    $ratio = $height / $width;

    foreach ($images as $delta => $image) {

      $parentMediaEntity = $image->_referringItem->getEntity();

      $uri = $image->getFileUri();
      $alt = $items[$delta]->alt;

      $imageId = $image->id();

      $srcset = [];

      $widths = [576, 768, 992, 1200];


      if ($parentMediaEntity->hasField('field_crop_type') && $parentMediaEntity->get('field_crop_type')->crop_type == 'crop') {
        $crop = $this->focalPointManager->getCropEntity($image, 'focal_point');
        if ($crop) {
          $focal_point = $crop->position();
        }
        $cid = "image:$imageId" . '-' . "crop:$width" . "x$height" . "focal:" . $focal_point['x'] . 'x' . $focal_point['y'];

        $ratio = $parentMediaEntity->get('field_crop_type')->height / $parentMediaEntity->get('field_crop_type')->width;

        if (!(\Drupal::cache()->get($cid) && $srcset = \Drupal::cache()->get($cid)->data)) {
          foreach ($widths as $width) {
            $height = (int)$width * $ratio;
            $srcset[] = $this->imageCropper->cropImage($uri, $width, $height, $focal_point) . ' ' . $width . 'w';
          }
          \Drupal::cache()->set($cid, $srcset);
        }
      } else {
        $cid = "image:$imageId" . '-' . 'scale';
        if (!(\Drupal::cache()->get($cid) && $srcset = \Drupal::cache()->get($cid)->data)) {
          foreach ($widths as $width) {
            $srcset[] = $this->imageCropper->scaleImage($uri, $width) . ' ' . $width . 'w';
          }
          \Drupal::cache()->set($cid, $srcset);
        }

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
      $this->renderer->addCacheableDependency($elements[$delta], $image);
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
