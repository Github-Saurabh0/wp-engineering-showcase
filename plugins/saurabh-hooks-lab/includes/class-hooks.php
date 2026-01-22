<?php

namespace SaurabhHooksLab;

if (!defined('ABSPATH')) exit;

class Hooks {

    public static function register() {
    add_action('wp_footer', [self::class, 'footer_message']);

    add_action('saurabh_lab_manual_action', [self::class, 'manual_action']);

    add_action('wp_ajax_saurabh_trigger_action', [self::class, 'ajax_action']);
    add_action('wp_ajax_saurabh_trigger_filter', [self::class, 'ajax_filter']);

    add_action('wp_ajax_nopriv_saurabh_trigger_action', [self::class, 'ajax_action']);
    add_action('wp_ajax_nopriv_saurabh_trigger_filter', [self::class, 'ajax_filter']);
}

    public static function manual_action() {
    error_log('Manual custom action triggered from admin panel');
}

public static function ajax_action() {
    do_action('saurabh_lab_manual_action');
    echo 'Custom action triggered successfully via AJAX';
    wp_die();
}

public static function ajax_filter() {
    $result = apply_filters('saurabh_lab_manual_filter', 'Original Text');
    echo esc_html($result);
    wp_die();
}


public static function footer_message() {
        echo '<p style="text-align:center;">Hooks loaded via OOP architecture</p>';
    }
}
