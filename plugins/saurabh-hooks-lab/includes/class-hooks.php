<?php

namespace SaurabhHooksLab;

if (!defined('ABSPATH')) exit;

class Hooks {

    public static function register() {

          add_action('wp_footer', [self::class, 'footer_message']);
          add_action('saurabh_lab_manual_action', [self::class, 'manual_action']);
    }

    public static function footer_message() {
        echo '<p style="text-align:center;">Hooks loaded via OOP architecture</p>';
    }

    public static function manual_action() {
    error_log('Manual custom action triggered from admin panel');
}
}
