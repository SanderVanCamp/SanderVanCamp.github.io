<?php

namespace Drupal\automatic_images\Plugin\Field\FieldFormatter;

use Drupal\automatic_images\ImageCropper;
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
 *   id = "auto_scale_responsive_media_image",
 *   label = @Translation("Auto Scale Responsive Image"),
 *   field_types = {
 *     "entity_reference"
 *   },
 * );
 */
class AutoScaleResponsiveMediaImageFormatter extends ImageFormatterBase implements ContainerFactoryPluginInterface
{

  protected $imageCropper;

  /**
   * The renderer service.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected $renderer;


  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, $label, $view_mode, array $third_party_settings, ImageCropper $imageCropper, RendererInterface $renderer)
  {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings);
    $this->imageCropper = $imageCropper;
    $this->renderer = $renderer;
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
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state)
  {
    return parent::settingsForm($form, $form_state);
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

    foreach ($media_entities as $delta => $media_entity) {

      $alt = $media_entity->field_media_image->alt;
      $uri = $media_entity->field_media_image->entity->getFileUri();
      $maxWidth = $media_entity->field_media_image->width;

      $mediaId = $media_entity->id();

      $mimeType = $media_entity->field_media_image->entity->getMimeType();

      $srcset = [];


      $widths = [576, 768, 992, 1200];

      $cid = "media:$mediaId" . '-' . 'scale';
      if (!(\Drupal::cache()->get($cid) && $srcset = \Drupal::cache()->get($cid)->data)) {
        foreach ($widths as $width) {
          $srcset[] = $this->imageCropper->scaleImage($uri, $width) . ' ' . $width . 'w';
        }
        \Drupal::cache()->set($cid, $srcset);
      }

      $srcsetFirstArr = explode(' ', reset($srcset));
      $srcsetLastArr = explode(' ', end($srcset));

      $elements[$delta] = array(
        '#theme' => 'image',
        '#attributes' => [
          'data-src' => $srcsetLastArr[0],
          'data-srcset' => implode(', ', $srcset),
          'src' => $srcsetFirstArr[0],
          'srcset' => $srcsetFirstArr[0],
          'data-sizes' => 'auto',
          'alt' => $alt,
          'class' => ['img-fluid', 'lazyload', 'blur-up'],

        ],
        '#attached' => ['library' => [
          'automatic_images/lazysizes',
        ]]
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
