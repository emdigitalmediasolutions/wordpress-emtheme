<?php

if (!class_exists('EmTheme_Customize')) {
    class EmTheme_Customize
    {
        public static function register($wp_customize)
        {
			// Header & Footer Background Color.
			$wp_customize->add_setting(
				'header_footer_background_color',
				array(
					'default'           => '#3c366b',
					'sanitize_callback' => 'sanitize_hex_color',
					'transport'         => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'header_footer_background_color',
					array(
						'label'   => 'Header and Footer Background Color',
						'section' => 'colors',
					)
				)
			);
			
			// Header & Footer Text Color.
			$wp_customize->add_setting(
				'header_footer_text_color',
				array(
					'default'           => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
					'transport'         => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'header_footer_text_color',
					array(
						'label'   => 'Header and Footer Text Color',
						'section' => 'colors',
					)
				)
            );

            
            // Primary Color
			$wp_customize->add_setting(
				'primary_background_color',
				array(
					'default'           => '#4c51bf',
					'sanitize_callback' => 'sanitize_hex_color',
					'transport'         => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'primary_background_color',
					array(
						'label'   => 'Primary Color',
						'section' => 'colors',
					)
				)
			);
            
            // Secondary Color
			$wp_customize->add_setting(
				'secondary_background_color',
				array(
					'default'           => '#718096',
					'sanitize_callback' => 'sanitize_hex_color',
					'transport'         => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'secondary_background_color',
					array(
						'label'   => 'Secondary Color',
						'section' => 'colors',
					)
				)
			);

        }
    }

	// Setup the Theme Customizer settings and controls.
	add_action( 'customize_register', array( 'EmTheme_Customize', 'register' ) );
}