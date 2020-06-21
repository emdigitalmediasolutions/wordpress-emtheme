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

		<?php if (!has_post_thumbnail($post->ID)) { ?>
			<div style="background-color: <?php echo $primary_color; ?>;">
				<div class="container mx-auto px-2 py-10">
					<?php the_title( '<h1 class="text-2xl md:text-4xl text-white">', '</h1>' ); ?>
				</div>
			</div>
		<?php } ?>

		<?php if (has_post_thumbnail($post->ID)) { ?>
			<div class="relative" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
				<div style="background-color: rgba( 0, 0, 0, 0.5 );">
					<div class="container mx-auto px-2 py-20 text-center">
						<?php the_title( '<h1 class="text-4xl md:text-6xl my-5 text-white font-thin">', '</h1>' ); ?>
						<?php if (has_excerpt($post->ID)) { ?>
							<p class="text-white text-lg my-5 font-light">
								<?php echo get_the_excerpt($post->ID); ?>
							</p>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>

		</header><!-- .entry-header -->
	<?php endif; ?>


	<div class="<?php echo $containerClass; ?>">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">Pages: ',
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="<?php echo $containerClass; ?> py-10">

		<?php edit_post_link('Edit Page', '<span class="inline-block rounded px-5 py-2 text-white" style="background-color: ' . $secondary_color . ';">', '</span>'); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
