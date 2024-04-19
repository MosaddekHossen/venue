<?php
// wp_enqueue_scripts
function medi_add_theme_scripts()
{
    wp_enqueue_style('bootstrap-theme-css', get_template_directory_uri() . '/css/bootstrap-theme.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-theme-css-map', get_template_directory_uri() . '/css/bootstrap-theme.css.map', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-theme-min-css', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-css-map', get_template_directory_uri() . '/css/bootstrap.css.map', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('datepicker', get_template_directory_uri() . '/css/datepicker.css', array(), '1.0.0', 'all');
    wp_enqueue_style('fontAwesome', get_template_directory_uri() . '/css/fontAwesome.css', array(), '1.0.0', 'all');
    wp_enqueue_style('hero-slider', get_template_directory_uri() . '/css/hero-slider.css', array(), '1.0.0', 'all');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl-carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('templatemo', get_template_directory_uri() . '/css/templatemo-style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('datepicker', get_template_directory_uri() . '/js/datepicker.js', array('jquery'), 1.0, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/plugins.js', array(), 1.0, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.js', array(), 1.0, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), 1.0, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/jquery-1.11.2.min.js', array(), 1.0, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array(), 1.0, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/npm.js', array(), 1.0, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/main.js', array(), 1.0, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'medi_add_theme_scripts');
// include_once
include_once('inc/common/scripts.php');
