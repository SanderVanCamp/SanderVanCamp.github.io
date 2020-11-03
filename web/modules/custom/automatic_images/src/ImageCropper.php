<?php

namespace Drupal\automatic_images;

use Drupal\Component\Utility\Timer;
use Drupal\image\Entity\ImageStyle;

class ImageCropper
{

  protected $imageFactory;

  public function __construct($imageFactory)
  {
    $this->imageFactory = $imageFactory;
  }

  public function cropImage($image_uri, $width, $height)
  {
    $image_style_id = sprintf('automatic_images_crop_%dx%d', $width, $height);

    $image_style = ImageStyle::create([
      'name' => $image_style_id,
    ]);
    $image_style->addImageEffect([
      'id' => 'focal_point_scale_and_crop',
      'weight' => 0,
      'data' => [
        'width' => $width,
        'height' => $height,
      ],
    ]);

    $image_style->addImageEffect([
      'id' => 'image_convert',
      'weight' => 1,
      'data' => [
        'extension' => "jpg",
      ],
    ]);

    $derivative_uri =  $image_style->buildUri($image_uri);

    $success = file_exists($derivative_uri) || $image_style->createDerivative($image_uri, $derivative_uri);

    $image = $this->imageFactory->get($derivative_uri);
    $uri = $image->getSource();
    return file_url_transform_relative(file_create_url($uri));
  }


  public function scaleImage($image_uri, $width)
  {

    $image_style_id = sprintf('automatic_images_scale_%d', $width);

    $image_style = ImageStyle::create([
      'name' => $image_style_id,
    ]);

    $image_style->addImageEffect([
      'id' => 'image_scale',
      'weight' => 0,
      'data' => [
        'width' => $width,
        'height' => false,
        'upscale' => true
      ],
    ]);


    $image_style->addImageEffect([
      'id' => 'image_convert',
      'weight' => 1,
      'data' => [
        'extension' => "jpg",
      ],
    ]);

    $derivative_uri = $image_style->buildUri($image_uri);

    $success = file_exists($derivative_uri) || $image_style->createDerivative($image_uri, $derivative_uri);

    $image = $this->imageFactory->get($derivative_uri);
    $uri = $image->getSource();

    return file_url_transform_relative(file_create_url($uri));
  }
}
