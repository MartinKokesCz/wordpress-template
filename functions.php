<?php

function register_my_menu()
{
    register_nav_menu('side-menu', __('Side Menu'));
}
add_action('init', 'register_my_menu');

// style.css add
wp_enqueue_style('style', get_stylesheet_uri());

// adding bootstrap
wp_enqueue_style('BOOTSTRAP', get_template_directory_uri() . "/libs/bootstrap/css/bootstrap.min.css");
wp_enqueue_script('BOOTSTRAP-JS', get_template_directory_uri() . "/libs/bootstrap/js/bootstrap.min.js");
