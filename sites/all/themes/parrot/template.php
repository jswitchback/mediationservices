<?php
/*
  Preprocess
*/


function parrot_preprocess_html(&$vars) {
  // kpr($vars);
  if (!$vars['is_front']) {
    // Add a class to wrangle css changes to text, button and link colors on a green background
    $vars['classes_array'][] = 'page-dark';
  }

}

function parrot_preprocess_page(&$vars,$hook) {
  //typekit
  //drupal_add_js('http://use.typekit.com/XXX.js', 'external');
  //drupal_add_js('try{Typekit.load();}catch(e){}', array('type' => 'inline'));

  //webfont
  //drupal_add_css('http://cloud.webtype.com/css/CXXXX.css','external');

  //googlefont
  //  drupal_add_css('http://fonts.googleapis.com/css?family=Bree+Serif','external');

  // kpr($vars);
  // if ($vars['is_front']) {
  //   drupal_add_js(drupal_get_path('theme', 'parrot') . '/js/scroll.js', array('type' => 'file'));
  // }

  // If this is a panel page, add template suggestions.
  // Must have Ctools Page Manager enabled. Uncomment to use.
  if (module_exists('page_manager')) {
    if($panel_page = page_manager_get_current_page()) {
      // add a generic suggestion for all panel pages
      $vars['theme_hook_suggestions'][] = 'page__panel';

      // add the panel page machine name to the template suggestions
      $vars['theme_hook_suggestions'][] = 'page__' . $panel_page['name'];

      //add a body class for good measure
      $body_classes[] = 'page-panel';
    }
  }
}

function parrot_preprocess_block(&$vars, $hook) {

  //lets look for unique block in a region $region-$blockcreator-$delta
  //  $block =
  //  $vars['elements']['#block']->region .'-'.
  //  $vars['elements']['#block']->module .'-'.
  //  $vars['elements']['#block']->delta;

  // // print $block .' ';
  //  switch ($block) {
  //    case 'sidebar-system-navigation':
  //      $vars['classes_array'][] = '';
  //      break;
  //   default:

  //   break;

  //  }

  // switch ($vars['elements']['#block']->region) {
  //   case 'header':
  //     $vars['classes_array'][] = '';
  //     break;
  //   case 'sidebar':
  //     $vars['classes_array'][] = '';
  //     $vars['classes_array'][] = '';
  //     break;
  //   default:

  //     break;
  // }

  // add grid class dependant upon number of blocks in a region
  if ($vars['block']->region == 'footer') {
      // Get the count of blocks
      $allBlocks = block_list($vars['block']->region);
      $count = count($allBlocks);
      
      // take the count and convert the number to a word.
      switch ($count) {
        case 0:
          $count = 'empty';
          break;
          
        case 1:
          $count = 'one';
          break;
          
        case 2:
          $count = 'two';
          break;

        case 3:
          $count = 'three';
          break;
          
        case 4:
          $count = 'four';
          break;
          
        case 5:
          $count = 'five';
          break;
          
        case 6:
          $count = 'six';
          break;

        default:
          $count = 'default';
      }
      // add class to style responsive layout
      $vars['classes_array'][] = 'max-'. $count;
  }

}

/**
 * Implements template_preprocess_region().
 */
function parrot_preprocess_region(&$vars) {
  $region = $vars['region'];
  $footer_regions = array('footer','footer_top', 'footer_bottom');

  if (in_array($region, $footer_regions)) {
    $vars['classes_array'][] = 'container';
    $vars['theme_hook_suggestions'][] = 'region__footer';
  }
}

function parrot_preprocess_node(&$vars,$hook) {
  //  kpr($vars['content']);
}

function parrot_preprocess_comment(&$vars,$hook) {
  //  kpr($vars['content']);
}

function parrot_preprocess_field(&$vars,$hook) {
  //  kpr($vars['content']);
  //add class to a specific field
  // switch ($vars['element']['#field_name']) {
  //   case 'field_ROCK':
  //     $vars['classes_array'][] = 'classname1';
  //   case 'field_ROLL':
  //     $vars['classes_array'][] = 'classname1';
  //     $vars['classes_array'][] = 'classname2';
  //     $vars['classes_array'][] = 'classname1';
  //   case 'field_FOO':
  //     $vars['classes_array'][] = 'classname1';
  //   case 'field_BAR':
  //     $vars['classes_array'][] = 'classname1';
  //   default:
  //     break;
  // }

}

function parrot_preprocess_maintenance_page(){
  //  kpr($vars['content']);
}