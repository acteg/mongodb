<?php

/**
 * @file
 * Contains ModuleHandler.php
 *
 * A Drupal 7 compatibility layer with the Drupal 8 ModuleHandleInterface, just
 * for the needs of the MongoDB Path plugin.
 */

namespace Drupal\mongodb_path\Drupal8;


/**
 * Class ModuleHandler.
 *
 * A tiny D7 subset of the Drupal 8 module handler implementation.
 *
 * @package Drupal\mongodb_path
 */
class ModuleHandler implements ModuleHandlerInterface {

  /**
   * {@inheritdoc}
   */
  public function invokeAll($hook, array $args = array()) {
    return module_invoke_all($hook, $args);
  }
}