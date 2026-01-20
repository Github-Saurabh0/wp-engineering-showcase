<?php

namespace SaurabhHooksLab;

if (!defined('ABSPATH')) exit;

class Hooks {

    public static function register() {
        add_action('wp_footer', [self::class, 'footer_message']);
    }

    public static function footer_message() {
        echo '<p style="text-align:center;">Hooks loaded via OOP architecture</p>';
    }
}
