<?php
new \Kirki\Panel(
    'venue_panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__('My Options', 'venue'),
        'description' => esc_html__('My Panel Description.', 'venue'),
    ]
);

// venue_header_logo
function venue_header_logo()
{
    new \Kirki\Section(
        'logo_section_id',
        [
            'title'       => esc_html__('Logo Section', 'venue'),
            'description' => esc_html__('Logo Section Description.', 'venue'),
            'panel'       => 'venue_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'venue_header_logo',
            'label'       => esc_html__('Venue header logo', 'venue'),
            'description' => esc_html__('The saved value will be the URL.', 'venue'),
            'section'     => 'logo_section_id',
            'default'     => get_template_directory_uri() . '/img/logo.png',
        ]
    );
}
venue_header_logo();
