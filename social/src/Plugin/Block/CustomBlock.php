<?php

namespace Drupal\social\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**

 *
 * @Block(
 *   id = "custom_block",
 *   admin_label = @Translation("Custom block"),
 *   category = @Translation("Custom Block"),
 * )
 */
class CustomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $some_array = [
      'facebook' => [
        //add CLASS
        'is_active' => 'active',
        //text
        'label' => 'Facebook',
        'url' => 'http://facebook.com',
      ],
      'instagram' => [
        //add CLASS
        'is_active' => 'inactive',
        //TEXT
        'label' => 'Instagram',
        'url' => 'http://instagram.com',
      ],
    ];

    return [
      '#theme' => 'custom-block',
      '#social_info' => $some_array,
    ];

  }

}
