<?php
/**
 * Custom gutenberg blocks for use with this theme
 */


/*add_action('acf/init', 'theme_acf_blocks_init');

function theme_acf_blocks_init() {

  // check function exists
  if( function_exists('acf_register_block_type') ) {

      // ******************* Test Block *******************************
      acf_register_block_type(array(
          'name' => 'test-block',
          'title' => __('Test Block'),
          'description' => __('Test block with background image and copy'),
          'render_callback' => 'theme_acf_block_render_callback',
          'render_template' => 'templates/blocks/test-block.php',
          'icon' => 'format-image',
          'keywords' => array('padding', 'image', 'id'),
          'mode' => 'edit',
      ));


  }
}


// Remove the default gutenberg block
// https://rudrastyh.com/gutenberg/remove-default-blocks.html

function theme_allowed_block_types($allowed_block, $post)
{
    return array(
      'core/shortcode',
      'acf/test-block',

    );
}
add_filter('allowed_block_types_all', 'theme_allowed_block_types', 10, 2);
*/
