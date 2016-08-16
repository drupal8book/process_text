<?php

namespace Drupal\process_text\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ProcessTextController.
 *
 * @package Drupal\process_text\Controller
 */
class ProcessTextController extends ControllerBase {

  /**
   * Processtext.
   *
   * @return string
   *   Return processed custom text.
   */
  public function processText() {
    $custom_text = \Drupal::config('process_text.settings')->get('custom_text');
    // do processing
    // remove divs
    $custom_text = str_replace(["<div>", "</div>"], "", $custom_text);
    // replace greeting tokens
    $custom_text = str_replace("[greeting]", '<span class="greeting">hello world</span>', $custom_text);
    return [
      '#type' => 'markup',
      '#markup' => $custom_text
    ];
  }

}
