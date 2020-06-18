<?php

// Header file

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="m-0 p-0 h-full">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>

        <?php
            // Create custom style sheets from theme customisation

            // Get primary and secondary colors
            $primary_color = get_theme_mod( 'primary_background_color', DEFAULT_PRIMARY_COLOR );
            $primary_color = strtolower( '#' . ltrim( $primary_color, '#' ) );

            $secondary_color = get_theme_mod( 'secondary_background_color', DEFAULT_SECONDARY_COLOR );
            $secondary_color = strtolower( '#' . ltrim( $secondary_color, '#' ) );
        ?>
        <style>
            .hover-bg-primary:hover {
                background-color: <?php echo $primary_color; ?>;
            }

            .hover-bg-secondary:hover {
                background-color: <?php echo $secondary_color; ?>;
            }

            .hover-text-primary:hover {
                color: <?php echo $primary_color; ?>;
            }

            .hover-text-secondary:hover {
                color: <?php echo $secondary_color; ?>;
            }
        </style>
    </head>

    <body <?php body_class('flex flex-col h-full'); ?>>

        <?php
        wp_body_open();

        // Include the site navigation menu
        get_template_part('template-parts/nav-menu');

        // If this is the home page then include the home page slider
        if (is_front_page()) {
            // get_template_part('template-parts/home-slider');
        }