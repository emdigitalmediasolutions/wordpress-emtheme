<?php

// Theme footer


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


?>
    <footer>
      <div class="pt-3 md:pt-6 lg:pt-12 pb-3" style="background-color: <?php echo $header_footer_background; ?>; color: <?php echo $header_footer_text; ?>;">
        <div class="max-w-screen-xl mx-auto">
          <?php if ($has_sidebar_1 || $has_sidebar_2 || $has_sidebar_3 || $has_sidebar_4) { ?>
            <div class="flex">
              <div class="md:flex flex-1">
                <div class="md:flex-1 p-3">
                  <?php if ( $has_sidebar_1 ) : ?>
                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                      <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div><!-- #primary-sidebar -->
                  <?php endif; ?>
                </div>
                <div class="md:flex-1 p-3">
                <?php if ( $has_sidebar_2 ) : ?>
                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                      <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div><!-- #primary-sidebar -->
                  <?php endif; ?>
                </div>
              </div>
              <div class="md:flex flex-1">
                <div class="md:flex-1 p-3">
                  <?php if ( $has_sidebar_3 ) : ?>
                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                      <?php dynamic_sidebar( 'sidebar-3' ); ?>
                    </div><!-- #primary-sidebar -->
                  <?php endif; ?>
                </div>
                <div class="md:flex-1 p-3">
                  <?php if ( $has_sidebar_4 ) : ?>
                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                      <?php dynamic_sidebar( 'sidebar-4' ); ?>
                    </div><!-- #primary-sidebar -->
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <hr class="mx-10 my-4" style="background-color: <?php echo $header_footer_text; ?>; color: <?php echo $header_footer_text; ?>; border-color: <?php echo $header_footer_text; ?>;">
          <?php } ?>
          <div class="px-3">
            <p class="py-4 text-sm text-center md:text-left" style="color: <?php echo $header_footer_text; ?>;">© <?php echo date('Y'); ?>. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>

		<?php wp_footer(); ?>

    </body>
</html>