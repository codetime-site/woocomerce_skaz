<?php

define('THEME_DIR', get_template_directory_uri());
define('MY_ASSETS', THEME_DIR . '/assets');
define('MY_CSS', MY_ASSETS . '/css');

function codetime_scripts()
{
    wp_enqueue_style('style',  get_stylesheet_directory_uri() . '/assets/style/style.css');
}

add_action('wp_enqueue_scripts', 'codetime_scripts');