<?php

namespace Drupal\process_text\TextFilter;

interface Filter {

    /**
     * applies filter to given text and returns
     * filtered text.
     *
     * @param string $value
     *
     * @return string
     */
    public function apply_filter($txt);
}
