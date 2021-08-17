<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package galaxyr
 */

get_header();
?>

	<main class="main">
		<div class="container_center">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile; // End of the loop.
			?>
		</div>


	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
