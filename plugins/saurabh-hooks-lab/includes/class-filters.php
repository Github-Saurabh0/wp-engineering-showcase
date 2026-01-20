<?php

namespace SaurabhHooksLab;

if (!defined('ABSPATH')) exit;

class Filters {

    public static function register() {
        add_filter('the_content', [self::class, 'modify_content']);
    }

    public static function modify_content($content) {
        return $content . '<p><strong>Content modified using OOP filter</strong></p>';
    }
}
