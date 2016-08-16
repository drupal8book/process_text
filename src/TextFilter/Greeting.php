<?php

namespace Drupal\process_text\TextFilter;

class Greeting implements Filter {

  public function apply_filter($txt) {
    return str_replace("[greeting]", '<span class="greeting">hello world</span>', $txt);
  }
}
