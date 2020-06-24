<?php

$next_post = get_next_post();
$prev_post = get_previous_post();

if ( $next_post || $prev_post ) {

	$pagination_classes = '';

	if ( ! $next_post ) {
		$pagination_classes = ' only-one only-prev';
	} elseif ( ! $prev_post ) {
		$pagination_classes = ' only-one only-next';
	}

	?>

	<nav class="container mx-auto my-5 pagination-single section-inner<?php echo esc_attr( $pagination_classes ); ?>" aria-label="<?php esc_attr_e( 'Post', 'twentytwenty' ); ?>" role="navigation">

		<div class="pagination-single-inner">

			<?php
			if ( $prev_post ) {
				?>

				<a class="previous-post inline-block mx-3" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
					<button type="button" class="rounded-full px-3 py-2 bg-primary-color text-white text-sm opacity-75 hover:opacity-100 transition duration-200">
						Previous
					</button>
				</a>

				<?php
			}

			if ( $next_post ) {
				?>

				<a class="next-post inline-block mx-3" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
					<button type="button" class="rounded-full px-3 py-2 bg-primary-color text-white text-sm opacity-75 hover:opacity-100 transition duration-200">
						Next
					</button>
				</a>
				<?php
			}
			?>

		</div><!-- .pagination-single-inner -->

	</nav><!-- .pagination-single -->

	<?php
}
