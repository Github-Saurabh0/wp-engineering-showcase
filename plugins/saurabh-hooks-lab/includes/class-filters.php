<?php

namespace SaurabhHooksLab;

if (!defined('ABSPATH')) exit;

class Filters {

    public static function register() {
    add_filter('the_content', [self::class, 'modify_content']);

    add_filter('saurabh_lab_manual_filter', [self::class, 'manual_filter']);
}


public static function manual_filter($text) {
    return $text . ' → Modified using custom filter logic';
}

    public static function modify_content($content) {
        return $content . '<p><strong>Content modified using OOP filter</strong></p>';
    }
}
