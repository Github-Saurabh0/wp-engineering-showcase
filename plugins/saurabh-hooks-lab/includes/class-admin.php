<?php

namespace SaurabhHooksLab;

if (!defined('ABSPATH')) exit;

class Admin {

    public static function register() {
        add_action('admin_menu', [self::class, 'register_menu']);
    }

    public static function register_menu() {
        add_menu_page(
            'Hooks Lab',
            'Hooks Lab',
            'manage_options',
            'saurabh-hooks-lab',
            [self::class, 'render_page'],
            'dashicons-admin-tools',
            25
        );
    }

    public static function render_page() {
        ?>
        <div class="wrap">
            <h1>WordPress Hooks Engineering Lab</h1>

            <p>This dashboard is built to demonstrate practical WordPress engineering concepts.</p>

            <hr>

            <h2>Live Experiments</h2>

            <form method="post">
                <?php wp_nonce_field('saurabh_lab_action', 'saurabh_lab_nonce'); ?>

                <button name="trigger_action" class="button button-primary">
                    Trigger Custom Action
                </button>

                <button name="trigger_filter" class="button">
                    Apply Custom Filter
                </button>
            </form>

            <?php
            if (isset($_POST['trigger_action']) && check_admin_referer('saurabh_lab_action', 'saurabh_lab_nonce')) {
                do_action('saurabh_lab_manual_action');
                echo '<p><strong>Custom action executed. Check hooks behavior.</strong></p>';
            }

            if (isset($_POST['trigger_filter']) && check_admin_referer('saurabh_lab_action', 'saurabh_lab_nonce')) {
                $result = apply_filters('saurabh_lab_manual_filter', 'Original Text');
                echo '<p><strong>Filter Result:</strong> ' . esc_html($result) . '</p>';
            }
            ?>
        </div>
        <?php
    }
}
