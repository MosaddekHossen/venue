<?php
// venue_logo
function venue_logo()
{
    $venue_logo = get_theme_mod('venue_header_logo', get_template_directory_uri() . '/img/logo.png');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($venue_logo); ?>" alt="<?php echo bloginfo(); ?>"></a>
<?php
}

function venue_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'main-menu',
            'menu_class'      => 'nav menu',
            'menu_id'         => '',
            // 'fallback_cb'     => 'Medi_Walker_Nav_Menu::fallback',
            // 'walker'     => new Medi_Walker_Nav_Menu,
        )
    );
}
