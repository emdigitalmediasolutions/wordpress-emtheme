<?php

defined('ABSPATH') || exit;

function emtheme_cta_register_block()
{
    if (!function_exists('register_block_type'))
    {
        return;
    }

    wp_register_script(
        'emtheme-cta-block',
        get_stylesheet_directory_uri() . '/assets/js/cta.min.js',
        array('wp-blocks', 'wp-element'),
        filemtime(get_stylesheet_directory() . '/assets/js/cta.min.js')
    );

    register_block_type(
        'em-media/call-to-action',
        array('editor_script' => 'emtheme-cta-block')
    );
}

add_action('init', 'emtheme_cta_register_block');
