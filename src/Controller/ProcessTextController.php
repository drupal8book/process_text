<?php

namespace Drupal\process_text\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\process_text\TextFilter\RemoveDivs;
use Drupal\process_text\TextFilter\Greeting;
use Drupal\process_text\TextFilter\EnclosePTags;

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
    // do processing using a service
    $filter_service = \Drupal::service('process_text.text_filter');
    $custom_text = $filter_service->applyFilters($custom_text);
    return [
      '#type' => 'markup',
      '#markup' => $custom_text
    ];
  }

}
