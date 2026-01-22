<?php

namespace SaurabhHooksLab;

if (!defined('ABSPATH')) exit;

class Shortcodes {

    public static function register() {
        add_shortcode('hooks_lab', [self::class, 'render_lab']);
    }

    public static function render_lab() {
        ob_start();
        ?>
        <div id="saurabh-hooks-lab">
            <h2>Hooks Lab Frontend Demo</h2>

            <button id="trigger-action">Trigger Custom Action</button>
            <button id="trigger-filter">Apply Custom Filter</button>

            <p id="lab-result"></p>
        </div>

        <script>
            document.getElementById("trigger-action").onclick = function() {
                fetch("<?php echo admin_url('admin-ajax.php'); ?>?action=saurabh_trigger_action")
                    .then(res => res.text())
                    .then(data => document.getElementById("lab-result").innerText = data);
            };

            document.getElementById("trigger-filter").onclick = function() {
                fetch("<?php echo admin_url('admin-ajax.php'); ?>?action=saurabh_trigger_filter")
                    .then(res => res.text())
                    .then(data => document.getElementById("lab-result").innerText = data);
            };
        </script>
        <?php
        return ob_get_clean();
    }
}
