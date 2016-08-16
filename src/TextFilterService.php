<?php

namespace Drupal\process_text;

use Drupal\process_text\TextFilter\Filter;

/**
 * Class TextFilterService.
 *
 * @package Drupal\process_text
 */
class TextFilterService {

  private $filters = [];

  /**
   * @param Filter $filter
   */
  public function addFilter(Filter $filter) {

  }

    /**
     * applies all filters to given text and returns
     * filtered text.
     *
     * @param string $txt
     *
     * @return string
     */
  public function applyFilters($txt) {
    foreach ($this->filters as $filter) {
      $txt = $filter->apply_filter($txt);
    }
    return $txt;
  }
}
