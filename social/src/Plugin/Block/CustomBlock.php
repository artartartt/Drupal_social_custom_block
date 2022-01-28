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


// kamel

/*

<?php

namespace Drupal\social\Plugin\Block;

use Drupal\Core\Url;
use Drupal\Core\Link;
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
    $list = array();
    function add_social_links($url,$link_options,$text,&$list){
      $url = Url::fromUri($url);
      $url->setOptions($link_options);
      $link = Link::fromTextAndUrl($text, $url);
      $list[] = $link;
    }
    add_social_links("https://facebook.com",[
      'attributes' => [
        'target' => 'fb_blank',
        'title' => 'Link to Facebook page',
      ],
    ],"Facebook",$list);

    add_social_links("https://instagram.com",[
      'attributes' => [
        'target' => 'instagram_blank',
        'title' => 'Link to Instagram page',
      ],
    ],"Instagram",$list);
    add_social_links("https://vk.com",[],"VK",$list);

    $output['my_links_page'] = [
      '#theme' => 'item_list',
      '#items' => $list,
      '#title' => $this->t('Social Media Links'),
    ];

    return $output;

  }

}
*/


