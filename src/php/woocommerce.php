<?php

// The template file for rendering a single page

// @since 1.0.0

get_header();
?>

<main id="site-content" role="main" class="flex-1">

	<div class="container mx-auto my-5 px-3">
		<?php woocommerce_content(); ?>
	</div>

</main>

<?php

get_footer();