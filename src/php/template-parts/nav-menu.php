<?php

$title = get_bloginfo('name');
$description = get_bloginfo('description');

// Get header/footer background color.
$header_footer_background = get_theme_mod( 'header_footer_background_color', '#3c366b' );
$header_footer_background = strtolower( '#' . ltrim( $header_footer_background, '#' ) );

// Get header/footer text color.
$header_footer_text = get_theme_mod( 'header_footer_text_color', '#ffffff' );
$header_footer_text = strtolower( '#' . ltrim( $header_footer_text, '#' ) );

// Get header padding
$header_padding = get_theme_mod( 'header_padding_value', DEFAULT_HEADER_PADDING );

// Get header padding
$header_letter_spacing = get_theme_mod( 'header_nav_letter_spacing', '' );

// Get header alignment
$header_alignment = get_theme_mod( 'header_alignment', 'text-right' );

// Get header action button path and label
$header_action_button_path = get_theme_mod( 'header_action_button_path', '' );
$header_action_button_label = get_theme_mod( 'header_action_button_label', 'ACTION' );

// Get header contact number
$header_contact_number = get_theme_mod( 'header_contact_number', '' );

// Get primary and secondary colors
$primary_color = get_theme_mod( 'primary_background_color', DEFAULT_PRIMARY_COLOR );
$primary_color = strtolower( '#' . ltrim( $primary_color, '#' ) );

$secondary_color = get_theme_mod( 'secondary_background_color', DEFAULT_SECONDARY_COLOR );
$secondary_color = strtolower( '#' . ltrim( $secondary_color, '#' ) );

// Get header shadow
$header_shadow = get_theme_mod( 'header_shadow', '' );

// Get header container class
$header_container_class = get_theme_mod( 'header_container_class', '' );

?>

<nav class="flex items-center justify-between flex-wrap p-<?php echo $header_padding; ?> <?php echo $header_shadow; ?> <?php echo $header_container_class; ?>" style="background-color: <?php echo $header_footer_background; ?>;">
  <div class="flex items-center flex-shrink-0 mr-6" style="color: <?php echo $header_footer_text; ?>;">
    <?php if ( has_custom_logo() ) : ?>
      <div>
        <div class="mr-5 nav-menu-site-logo"><?php the_custom_logo(); ?></div>
      </div>
    <?php endif; ?>
    <?php if (get_theme_mod('header_text') !== 0) : ?>
      <div class="hidden sm:block">
        <span class="font-semibold text-xl tracking-tight">
          <?php echo $title; ?>
          <?php if ($description !== '') { ?>
            <span class="font-normal text-sm"><br />
              <?php echo $description; ?>
            </span>
          <?php } ?>
          <?php if ($header_contact_number !== '') { ?>
            <div class="text-base font-normal">
              <?php echo $header_contact_number; ?>
            </div>
          <?php } ?>
        </span>
      </div>
    <?php endif; ?>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border nav-menu-toggle" style="color: <?php echo $header_footer_text; ?>; border-color: <?php echo $header_footer_text; ?>">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm <?php echo $header_alignment; ?> lg:flex-grow" style="color: <?php echo $header_footer_text; ?>; <?php if ($header_letter_spacing !== '') { echo 'letter-spacing: ' . $header_letter_spacing . 'px;'; } ?>">
    <?php
    wp_nav_menu(array( 
      'theme_location' => 'primary', 
      'container_class' => 'emtheme-menu',
      'before' => '<span class="hover-text-primary" style="transition-property: color; transition-duration: .2s;">',
      'after' => '</span>',
    )); 
    ?>
    </div>
    <?php if ($header_action_button_path !== '') { ?>
      <div class="text-center p-4 lg:p-0 lg:px-4">
        <a href="<?php echo $header_action_button_path; ?>" class="rounded-lg px-3 py-2 text-sm text-white" style="background-color: <?php echo $primary_color ?>;">
          <?php echo $header_action_button_label; ?>
        </a>
      </div>
    <?php } ?>
  </div>
</nav>