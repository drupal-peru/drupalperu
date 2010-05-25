<?php

/**
 * Implementation of theme_preprocess_block().
 */
function drupal_peru_preprocess_block(&$variables) {
  $edit_path = sprintf('admin/build/block/configure/%s/%d', $variables['block']->module, $variables['block']->delta);
  $attributes = array('title' => t('edit the content of this block'), 'class' => 'block-edit');
  $variables['edit_link'] = l(t('edit block'), $edit_path, array('attributes' => $attributes, 'query' => drupal_get_destination(), 'html' => TRUE));
}
