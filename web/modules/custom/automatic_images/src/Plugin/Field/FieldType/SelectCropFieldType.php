<?php

namespace Drupal\automatic_images\Plugin\Field\FieldType;

use Drupal\Component\Utility\Random;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Field\Annotation\FieldType;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'select_crop_field_type' field type.
 *
 * @FieldType(
 *   id = "select_crop_field_type",
 *   label = @Translation("Select crop"),
 *   description = @Translation("My Field Type"),
 *   default_widget = "select_crop_widget",
 *   default_formatter = "image"
 * )
 */
class SelectCropFieldType extends FieldItemBase
{

  /**
   * {@inheritdoc}
   */
  public static function defaultStorageSettings()
  {
    return [
        'max_length' => 255,
        'is_ascii' => FALSE,
        'case_sensitive' => FALSE,
      ] + parent::defaultStorageSettings();
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition)
  {
    // Prevent early t() calls by using the TranslatableMarkup.
    $properties['crop_type'] = DataDefinition::create('string')
      ->setLabel(new TranslatableMarkup('Crop Type'));
    $properties['width'] = DataDefinition::create('integer')
      ->setLabel(new TranslatableMarkup('Width'));
    $properties['height'] = DataDefinition::create('integer')
      ->setLabel(new TranslatableMarkup('Height'));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition)
  {
    $schema = [
      'columns' => [
        'crop_type' => [
          'type' => 'varchar',
          'length' => 32,
          'not null' => TRUE,
        ],
        'width' => [
          'type' => 'int',
          'size' => 'medium',
        ],
        'height' => [
          'type' => 'int',
          'size' => 'medium',
        ],
      ],
    ];

    return $schema;
  }

  /**
   * {@inheritdoc}
   */
  public function getConstraints()
  {
    $constraints = parent::getConstraints();

    return $constraints;
  }

  /**
   * {@inheritdoc}
   */
  public static function generateSampleValue(FieldDefinitionInterface $field_definition)
  {
    $random = new Random();
    $values['value'] = $random->word(mt_rand(1, $field_definition->getSetting('max_length')));
    return $values;
  }

  /**
   * {@inheritdoc}
   */
  public function storageSettingsForm(array &$form, FormStateInterface $form_state, $has_data)
  {
    $elements = [];

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty()
  {
    return null;
  }

}
