<?php

function emtheme_services_register_block()
{
    $theme_version = wp_get_theme()->get('Version');

    wp_register_script(
        'emtheme-services-block',
        get_template_directory_uri() . '/assets/js/services-block.min.js',
        array(),
        $theme_version,
        true,
    );

    register_block_type(
        'emtheme/services',
        array('editor_script' => 'emtheme-services-block')
    );
}

add_action('init', 'emtheme_services_register_block');
