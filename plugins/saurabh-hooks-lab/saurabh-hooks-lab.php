<?php
/**
Plugin Name: Saurabh Hooks Lab
Description: Demonstrates custom hooks and filters
Version: 1.0
Author: Saurabh Kushwaha
*/

add_action('init', function() {
    do_action('saurabh_custom_action');
});

add_action('saurabh_custom_action', function() {
    error_log('Custom Action Triggered');
});
