<?php

// Header file

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="m-0 p-0 h-full">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
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