<?php

// Actions demo
add_action('wp_footer', function() {
    echo '<p style="text-align:center">Custom Action Loaded</p>';
});
