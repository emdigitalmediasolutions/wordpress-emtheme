<?php
/**
 * Template Name: Full Width Template
 * Template Post Type: page
 *
 */

get_header();
?>

<main id="site-content" role="main" class="flex-1">

	<?php
    if (have_posts()) {

		$i = 0;
		while (have_posts()) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();
            $pageFullWidth = '1';
            get_template_part( 'template-parts/content', get_post_type() );
		}
	}
	?>
	
</main>

<?php

get_footer();