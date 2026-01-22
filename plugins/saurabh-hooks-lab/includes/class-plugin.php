<?php

namespace SaurabhHooksLab;

if (!defined('ABSPATH')) exit;

class Plugin {

    private static $instance = null;

    public static function get_instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        $this->load_dependencies();
    }

    private function load_dependencies() {
    require_once plugin_dir_path(__DIR__) . 'includes/class-hooks.php';
    require_once plugin_dir_path(__DIR__) . 'includes/class-filters.php';
    require_once plugin_dir_path(__DIR__) . 'includes/class-admin.php';
    require_once plugin_dir_path(__DIR__) . 'includes/class-shortcodes.php';

    Hooks::register();
    Filters::register();
    Admin::register();
    Shortcodes::register();
}
}
