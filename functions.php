<?php
//  Essential theme supports
function venue_theme_setup()
{
    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgets **/
    add_theme_support('customize-selective-refresh-widgets');

    // register_nav_menu
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'harry'),
            'footer-menu' => __('Footer Menu', 'harry'),
        )
    );

    // remove_theme_support
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'venue_theme_setup');

// Venue_copyright_option
function Venue_copyright_option()
{
    $venue_copyright = get_theme_mod('venue_copyright', __('Copyright &copy; 2018 Company Name - Design: Template Mo', 'venue'));
?>
    <p><?php wp_kses_post($venue_copyright); ?></p>
<?php
}

// venue_footer
function venue_footer()
{
    get_template_part('/inc/template-parts/footer/footer-1');
}

// include_once
include_once('inc/common/scripts.php');
include_once('inc/common/venue-kirki.php');
include_once('inc/common/template-function.php');
