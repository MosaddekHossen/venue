<?php
// venue_logo
function venue_logo()
{
    $venue_logo = get_theme_mod('venue_header_logo', get_template_directory_uri() . '/img/logo.png');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($venue_logo); ?>" alt="<?php echo bloginfo(); ?>"></a>
<?php
}

// venue_menu
function venue_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'main-menu',
            'container'       => 'false',
            'menu_class'      => 'nav menu',
        )
    );
}

// venue_footer_widget
function venue_footer_widget()
{
    register_sidebar(array(
        'name'          => __('Footer Widget 01', 'venue'),
        'id'            => 'footer-sidebar-1',
        'description'   => __('Widgets in this area will be shown on footer.', 'venue'),
        'before_widget' => '<div id="%1$s" class="about-veno %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 02', 'venue'),
        'id'            => 'footer-sidebar-2',
        'description'   => __('Widgets in this area will be shown on footer.', 'venue'),
        'before_widget' => '<div id="%1$s" class="useful-links %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-heading"><h4>',
        'after_title'   => '</h4></div>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 03', 'venue'),
        'id'            => 'footer-sidebar-3',
        'description'   => __('Widgets in this area will be shown on footer.', 'venue'),
        'before_widget' => '<div id="%1$s" class="contact-info %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-heading"><h4>',
        'after_title'   => '</h4></div>',
    ));
}
add_action('widgets_init', 'venue_footer_widget');
