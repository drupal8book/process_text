<?php

namespace Drupal\process_text\TextFilter;

class EnclosePTags implements Filter {

  public function apply_filter($txt) {
    return '<p>'. $txt . '</p>';
  }
}
