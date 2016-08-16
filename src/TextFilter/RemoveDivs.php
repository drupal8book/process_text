<?php

namespace Drupal\process_text\TextFilter;

class RemoveDivs implements Filter {

  public function apply_filter($txt) {
    return str_replace(["<div>", "</div>"], "", $txt);
  }
}
