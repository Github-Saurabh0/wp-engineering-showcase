<?php
/**
 * Plugin Name: Saurabh Hooks Lab
 * Description: Professional WordPress engineering lab for hooks and filters.
 * Version: 1.0
 * Author: Saurabh Kushwaha
 */

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-plugin.php';

function saurabh_hooks_lab_init() {
    return \SaurabhHooksLab\Plugin::get_instance();
}

saurabh_hooks_lab_init();
