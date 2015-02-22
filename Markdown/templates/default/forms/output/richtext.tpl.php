<?php

    if (!empty($vars['rel'])) {
        $rel = $vars['rel'];
    } else {
        $rel = '';
    }
    $body = $vars['value'];
    $body = \Michelf\Markdown::defaultTransform($body);
    echo $this->autop($this->parseURLs($this->parseHashtags($body), $rel));

