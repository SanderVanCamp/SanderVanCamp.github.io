<?php

namespace Drupal\automatic_images\Plugin\Field\FieldWidget;

use Drupal\Core\Annotation\Translation;
use Drupal\Core\Field\Annotation\FieldWidget;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'select_crop_widget' widget.
 *
 * @FieldWidget(
 *   id = "select_crop_widget",
 *   label = @Translation("Select crop widget"),
 *   field_types = {
 *     "select_crop_field_type"
 *   }
 * )
 */
class SelectCropWidget extends WidgetBase
{

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings()
  {
    return [
        'size' => 60,
        'placeholder' => '',
      ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state)
  {
    $elements = [];

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary()
  {
    $summary = [];

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state)
  {

$testke = $items[$delta]->crop_type;

    $element += [
      '#type' => 'container',
      'crop_type' => [
        '#type' => 'radios',
        '#default_value' => isset($items[$delta]->crop_type) ? $items[$delta]->crop_type : 'crop',
        '#options' => [
          'crop' => 'Crop',
          'scale' => 'Scale'
        ],
        '#attributes' => [
          'id' => 'crop_type_select_input',
        ],
      ],
      'width' => [
        '#type' => 'number',
        '#default_value' => isset($items[$delta]->width) ? $items[$delta]->width : 1,
        '#size' => 4,
        '#min' => 0,
        '#states' => [
          'visible' => [
            ':input[id="crop_type_select_input"]' => ['value' => 'crop'],
          ],
        ],
      ],
      'height' => [
        '#type' => 'number',
        '#default_value' => isset($items[$delta]->height) ? $items[$delta]->height : 1,
        '#size' => 4,
        '#min' => 0,
        '#states' => [
          'visible' => [
            ':input[id="crop_type_select_input"]' => ['value' => 'crop'],
          ],
        ],
      ]
    ];


    return $element;
  }


}
