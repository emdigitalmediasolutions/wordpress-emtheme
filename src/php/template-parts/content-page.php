<?php

// Do not access directly
defined('ABSPATH') || exit;

// Get primary and secondary colors
$primary_color = get_theme_mod( 'primary_background_color', DEFAULT_PRIMARY_COLOR );
$primary_color = strtolower( '#' . ltrim( $primary_color, '#' ) );

$secondary_color = get_theme_mod( 'secondary_background_color', DEFAULT_SECONDARY_COLOR );
$secondary_color = strtolower( '#' . ltrim( $secondary_color, '#' ) );

global $pageFullWidth;
$containerClass = 'container mx-auto px-2';
if (isset($pageFullWidth) && $pageFullWidth)
{
	$containerClass = '';
}

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php if ( !is_front_page() ) : ?>


	<header class="entry-header">

		<div style="background-color: <?php echo $primary_color; ?>;">
			<div class="container mx-auto px-2 py-10">
				<?php the_title( '<h1 class="text-2xl md:text-4xl text-white">', '</h1>' ); ?>
			</div>
		</div>


	</header><!-- .entry-header -->

	<?php endif; ?>

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="<?php echo $containerClass; ?>">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="<?php echo $containerClass; ?> py-10">

		<?php edit_post_link('Edit Page', '<span class="inline-block rounded-full px-5 py-2 text-white opacity-75 hover:opacity-100 transition duration-200" style="background-color: ' . $secondary_color . ';">', '</span>'); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
