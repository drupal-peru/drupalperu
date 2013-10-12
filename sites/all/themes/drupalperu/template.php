<?php

/**
 * Implementation of theme_preprocess_block().
 */
function drupal_peru_preprocess_block(&$variables) {
  $edit_path = sprintf('admin/build/block/configure/%s/%d', $variables['block']->module, $variables['block']->delta);
  $attributes = array('title' => t('edit the content of this block'), 'class' => 'block-edit');
  $variables['edit_link'] = l(t('edit block'), $edit_path, array('attributes' => $attributes, 'query' => drupal_get_destination(), 'html' => TRUE));
}

/**
 * Implementation of theme_preprocess_page().
 */
function drupal_peru_preprocess_page(&$variables) {
  $variables['logo'] = url(drupal_get_path('theme', 'drupal_peru') . '/images/logo.png');
}

/**
 * Implementation of theme_imagefield_image().
 */
function drupal_peru_imagefield_image($file, $alt = '', $title = '', $attributes = NULL, $getsize = TRUE) {
  if (isset($file['source']) && $file['source'] == 'default_image_upload') {
    return '';
  }
  return theme_imagefield_image($file, $alt, $title, $attributes, $getsize);
}

/**
 * Muestra el título del menu e imprime un menu personalizado.
 */

function drupal_peru_menu_render($menuname){
  $menu = menu_load($menuname);
  $output = '<h3>' . $menu['title'] . '</h3>';
  $output .= '<div id="external_links">' . theme('links', menu_navigation_links($menuname)) . '</div>';

  return $output;
}
