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
            .bg-primary-color {
                background-color: <?php echo $primary_color; ?>;
            }

            .bg-secondary-color {
                background-color: <?php echo $secondary_color; ?>;
            }

            .text-primary-color {
                color: <?php echo $primary_color; ?>;
            }

            .hover-bg-primary:hover {
                background-color: <?php echo $primary_color; ?>;
            }

            .hover-bg-secondary:hover {
                background-color: <?php echo $secondary_color; ?>;
            }
            .hover-bg-white:hover {
                background-color: #fff;
            }

            .hover-text-primary:hover {
                color: <?php echo $primary_color; ?>;
            }

            .hover-text-secondary:hover {
                color: <?php echo $secondary_color; ?>;
            }

            .hover-text-white:hover {
                color: #fff;
            }

            div.summary.entry-summary > p > span.amount {
                color: <?php echo $primary_color; ?>;
                font-weight: 300;
                font-size: 1.6rem;
            }

            div.summary.entry-summary > form > button.single_add_to_cart_button {
                background-color: <?php echo $primary_color; ?>;
                opacity: .75;
                transition: opacity .2s;
            }
            div.summary.entry-summary > form > button.single_add_to_cart_button:hover {
                background-color: <?php echo $primary_color; ?>;
                opacity: 1;
            }

            div.woocommerce > div.cart-collaterals > div > div > a.checkout-button,.woocommerce form.checkout #place_order {
                background-color: <?php echo $primary_color; ?>;
                opacity: .75;
                transition: opacity .2s;
                border-radius: 5rem;
                padding: 1rem;
                padding-left: 2rem;
                padding-right: 2rem;
                display: inline-block;
                margin-left: auto;
            }
            div.woocommerce > div.cart-collaterals > div > div > a.checkout-button:hover,.woocommerce form.checkout #place_order:hover {
                background-color: <?php echo $primary_color; ?>;
                opacity: 1;
            }

            div.woocommerce-notices-wrapper > div.woocommerce-message,.woocommerce .woocommerce-info {
                border-top-color: <?php echo $primary_color; ?>;
            }
            div.woocommerce-notices-wrapper > div.woocommerce-message:before,a.woocommerce-LoopProduct-link.woocommerce-loop-product__link > span > span.amount,.woocommerce .woocommerce-info:before {
                color: <?php echo $primary_color; ?>;
            }
        </style>
    </head>

    <body <?php body_class('flex flex-col min-h-full'); ?>>

        <?php
        wp_body_open();

        // Include the site navigation menu
        get_template_part('template-parts/nav-menu');

        // If this is the home page then include the home page slider
        if (is_front_page()) {
            // get_template_part('template-parts/home-slider');
        }