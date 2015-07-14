<?php
/*
Plugin Name: Custom Admin Theme
Plugin URI: https://github.com/QoboLtd/Qobo-WP-Custom-Admin-Theme
Description: Customize Admin Theme
Author: Antonis Flangofas
Version: 1.0.0
Author URI: http://github.com/flangofas
*/

function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', plugins_url('wp-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');
?>
