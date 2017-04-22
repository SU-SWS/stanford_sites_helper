<?php

/**
 * @file
 * stanford_sites_helper.drush.inc
 */

/**
 * Implements hook_drush_command().
 */
function stanford_sites_helper_drush_command() {
  $items = array();

  $items['stanford-sites-wysiwyg'] = array(
    'description' => 'Clean all wysiwyg fields on launch day',
    'arguments' => array(
      'shortname' => 'Site shortname. Ex: sites.stanford.edu/foo enter "foo" without quotes.',
    ),
    'aliases' => array('ssw'),
  );

  return $items;
}

/**
 * Clean up field data to assist with edit forms when the path is incorrect.
 *
 * @param string $shortname
 *   Sites shortname.
 */
function drush_stanford_sites_helper_stanford_sites_wysiwyg($shortname = '') {
  if (!$shortname) {
    drush_log(dt('No shortname provided'), 'error');
    return;
  }

  $shortname = trim($shortname, '/ ');
  $field_types = array('text', 'text_long', 'text_with_summary');

  foreach ($field_types as $type) {
    $fields = field_read_fields(array('type' => $type));

    foreach (array_keys($fields) as $field_name) {
      $tables = array("field_data_$field_name", "field_revision_$field_name");
      $patterns = array("\"/$shortname/" => '"/');

      $column = "{$field_name}_value";

      foreach ($patterns as $pattern => $replacement) {
        foreach ($tables as $table) {
          db_query("UPDATE $table SET $column = REPLACE($column, '$pattern', '$replacement') WHERE $column LIKE '%$pattern%'")->execute();
        }
      }
    }
  }

  cache_clear_all('*', 'cache_field', TRUE);
}
