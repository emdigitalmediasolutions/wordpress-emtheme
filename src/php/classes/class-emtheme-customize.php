<?php

if (!class_exists('EmTheme_Customize')) {
    class EmTheme_Customize
    {
        public static function register($wp_customize)
        {

			// ********************** Custom Sections ***********************
			$wp_customize->add_section( 'header_settings' , array(
				'title' => 'Header / Navigation Menu',
				'priority' => 100,
				'description' => 'Settings for the header and navigation menu'
			) );


			// *********************** Colors ****************************

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

			// *********************** Header / Navigation Bar Settings *******************

			// Header Padding Value
			$wp_customize->add_setting(
				'header_padding_value',
				array(
					'default' => '6',
					'sanitize_callback' => 'sanitize_text_field',
					'transport' => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'header_padding_value',
					array(
						'label' => 'Header / Nav Padding',
						'section' => 'header_settings',
						'type' => 'select',
						'choices' => array(
							'0' => '0',
							'1' => '1',
							'2' => '2',
							'3' => '3',
							'4' => '4',
							'5' => '5',
							'6' => '6',
							'8' => '8',
							'10' => '10',
							'12' => '12',
							'16' => '16',
							'20' => '20',
						)
					)
				)
			);

			// Header Alignment
			$wp_customize->add_setting(
				'header_alignment',
				array(
					'default' => 'text-right',
					'sanitize_callback' => 'sanitize_text_field',
					'transport' => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'header_alignment',
					array(
						'label' => 'Header Menu Alignment',
						'section' => 'header_settings',
						'type' => 'select',
						'choices' => array(
							'text-right' => 'Right',
							'text-left' => 'Left',
						)
					)
				)
			);

			// Contact Detail
			$wp_customize->add_setting(
				'header_contact_number',
				array(
					'default' => '',
					'sanitize_callback' => 'sanitize_text_field',
					'transport' => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'header_contact_number',
					array(
						'label' => 'Contact Detail',
						'section' => 'header_settings',
						'type' => 'text'
					)
				)
			);

			// Action Button Path
			$wp_customize->add_setting(
				'header_action_button_path',
				array(
					'default' => '',
					'sanitize_callback' => 'sanitize_text_field',
					'transport' => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'header_action_button_path',
					array(
						'label' => 'Header Action Button Path',
						'section' => 'header_settings',
						'type' => 'text'
					)
				)
			);

			// Action Button Label
			$wp_customize->add_setting(
				'header_action_button_label',
				array(
					'default' => '',
					'sanitize_callback' => 'sanitize_text_field',
					'transport' => 'refresh',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'header_action_button_label',
					array(
						'label' => 'Header Action Button Label',
						'section' => 'header_settings',
						'type' => 'text'
					)
				)
			);


        }
    }

	// Setup the Theme Customizer settings and controls.
	add_action( 'customize_register', array( 'EmTheme_Customize', 'register' ) );
}