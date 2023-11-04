<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ThemeBlanc_RenduWP
 */

get_header();
?>

	<main id="primary" class="site-main-single_bois">

	<?php
	while ( have_posts() ) :
		the_post(); ?>

		<a href="http://localhost/a2-WordPress-rendu/bois/" class="retour_archive-bois"> < Retour à la liste des bois</a>

		<section class="single_bois-card_full">
			<article class="single_bois-card">
				<?php the_post_thumbnail() ?>
				<div class="single_bois-card_content">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
				<button onclick="#">Ajouter au panier</button>
			</article>
		</section>
			
	<?php
	endwhile; // End of the loop.
	?>

	</main><!-- #main -->