<?php

// Theme footer

$title = get_bloginfo('name');

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );
$has_sidebar_3 = is_active_sidebar( 'sidebar-3' );
$has_sidebar_4 = is_active_sidebar( 'sidebar-4' );

// Get header/footer background color.
$header_footer_background = get_theme_mod( 'header_footer_background_color', '#3c366b' );
$header_footer_background = strtolower( '#' . ltrim( $header_footer_background, '#' ) );

// Get header/footer text color.
$header_footer_text = get_theme_mod( 'header_footer_text_color', '#ffffff' );
$header_footer_text = strtolower( '#' . ltrim( $header_footer_text, '#' ) );

// Get primary and secondary colors
$primary_color = get_theme_mod( 'primary_background_color', DEFAULT_PRIMARY_COLOR );
$primary_color = strtolower( '#' . ltrim( $primary_color, '#' ) );

$secondary_color = get_theme_mod( 'secondary_background_color', DEFAULT_SECONDARY_COLOR );
$secondary_color = strtolower( '#' . ltrim( $secondary_color, '#' ) );

// Get footer shadow
$footer_border = get_theme_mod( 'footer_border', '' );

// Get footer full width
$footer_full_width = get_theme_mod( 'footer_full_width', '' );

// Get footer container class
$footer_container_class = get_theme_mod( 'footer_container_class', '' );

// Get footer links / social settings
$footer_email_link = get_theme_mod( 'footer_email_link', '' );
$footer_facebook_link = get_theme_mod( 'footer_facebook_link', '' );
$footer_instagram_link = get_theme_mod( 'footer_instagram_link', '' );
$footer_twitter_link = get_theme_mod( 'footer_twitter_link', '' );
$footer_github_link = get_theme_mod( 'footer_github_link', '' );

?>
    <footer data-border="">
      <div class="pt-3 md:pt-6 lg:pt-12 pb-3 <?php echo $footer_border == '1' ? 'border-t' : ''; ?>" style="background-color: <?php echo $header_footer_background; ?>; color: <?php echo $header_footer_text; ?>;">
        <div class="<?php echo $footer_full_width !== '1' ? 'max-w-screen-xl mx-auto' : ''; ?>">
          <?php if ($has_sidebar_1 || $has_sidebar_2 || $has_sidebar_3 || $has_sidebar_4) { ?>
            <div class="md:flex">
              <div class="md:flex flex-1">
                <div class="md:flex-1 p-3">
                  <?php if ( $has_sidebar_1 ) : ?>
                    <div id="primary-sidebar-1" class="primary-sidebar widget-area" role="complementary">
                      <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div><!-- #primary-sidebar -->
                  <?php endif; ?>
                </div>
                <div class="md:flex-1 p-3">
                <?php if ( $has_sidebar_2 ) : ?>
                    <div id="primary-sidebar-2" class="primary-sidebar widget-area" role="complementary">
                      <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div><!-- #primary-sidebar -->
                  <?php endif; ?>
                </div>
              </div>
              <div class="md:flex flex-1">
                <div class="md:flex-1 p-3">
                  <?php if ( $has_sidebar_3 ) : ?>
                    <div id="primary-sidebar-3" class="primary-sidebar widget-area" role="complementary">
                      <?php dynamic_sidebar( 'sidebar-3' ); ?>
                    </div><!-- #primary-sidebar -->
                  <?php endif; ?>
                </div>
                <div class="md:flex-1 p-3">
                  <?php if ( $has_sidebar_4 ) : ?>
                    <div id="primary-sidebar-4" class="primary-sidebar widget-area" role="complementary">
                      <?php dynamic_sidebar( 'sidebar-4' ); ?>
                    </div><!-- #primary-sidebar -->
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <hr class="mx-10 my-4" style="background-color: <?php echo $header_footer_text; ?>; color: <?php echo $header_footer_text; ?>; border-color: <?php echo $header_footer_text; ?>;">
          <?php } ?>
          <div class="px-3 md:flex">
            <div class="md:flex-1">
              <p class="py-4 md:flex-1 text-sm text-center md:text-left" style="color: <?php echo $header_footer_text; ?>;">© <?php echo date('Y') . ' ' . $title; ?>. All rights reserved.</p>
            </div>
            <div class="py-4 md:flex-1 text-sm text-center md:text-right" style="color: <?php echo $header_footer_text; ?>;">
              <?php if ($footer_email_link !== '') { ?>
                <a href="mailto:<?php echo $footer_email_link; ?>">
                  <p class="inline-block p-3 transition duration-200 hover-text-primary cursor-pointer">
                    <i class="far fa-envelope fa-fw fa-lg"></i>
                  </p>
                </a>
              <?php }
              if ($footer_facebook_link !== '') { ?>
                <a href="https://facebook.com/<?php echo $footer_facebook_link; ?>" target="_blank">
                  <p class="inline-block p-3 transition duration-200 hover-text-primary cursor-pointer">
                    <i class="fab fa-facebook fa-fw fa-lg"></i>
                  </p>
                </a>
              <?php }
              if ($footer_instagram_link !== '') { ?>
                <a href="https://instagram.com/<?php echo $footer_instagram_link; ?>" target="_blank">
                  <p class="inline-block p-3 transition duration-200 hover-text-primary cursor-pointer">
                    <i class="fab fa-instagram fa-fw fa-lg"></i>
                  </p>
                </a>
              <?php }
              if ($footer_twitter_link !== '') { ?>
                <a href="https://twitter.com/<?php echo $footer_twitter_link; ?>" target="_blank">
                  <p class="inline-block p-3 transition duration-200 hover-text-primary cursor-pointer">
                    <i class="fab fa-twitter fa-fw fa-lg"></i>
                  </p>
              </a>
              <?php }
              if ($footer_github_link !== '') { ?>
                <a href="https://github.com/<?php echo $footer_github_link; ?>" target="_blank">
                  <p class="inline-block p-3 transition duration-200 hover-text-primary cursor-pointer">
                    <i class="fab fa-github fa-fw fa-lg"></i>
                  </p>
                </a>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="text-center text-xs mt-0 mb-4 em-footer">
          <a href="https://emdigitalmediasolutions.co.uk/" target="_blank" class="inline-block bg-primary-color text-white rounded-full opacity-75 hover:opacity-100 transition duration-200 p-1 px-4">
            Powered by EM Digital Media Solutions
          </a>
        </div>
      </div>
    </footer>

		<?php wp_footer(); ?>

    </body>
</html>