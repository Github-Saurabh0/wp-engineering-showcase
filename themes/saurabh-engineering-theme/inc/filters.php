<?php

// Filters demo
add_filter('the_content', function($content) {
    return $content . '<p><strong>Filtered by custom filter</strong></p>';
});
