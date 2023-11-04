<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ThemeBlanc_RenduWP
 */

$dataRevetement = get_fields();

get_header();
?>

	<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post(); ?>

		<a href="http://localhost/a2-WordPress-rendu/revetements/" class="retour_archive-revetements"> < Retour à la liste des revêtements</a>

		<article class="single_revetements-card">
			<?php the_post_thumbnail() ?>
			<div class="single_revetements-card_content">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<button>Ajouter au panier</button>
			</div>
		</article>
			
		<?php
	endwhile; // End of the loop.
	?>

	<section class='single_revetements-caract'>
		<h2>Caractéristiques</h2>
		<p><span class='bold'>Rapidité :</span> <?= $dataRevetement['rapidite']?></p>
		<p><span class='bold'>Contrôle :</span> <?= $dataRevetement['controle']?> </p>
		<p><span class='bold'>Adhérence :</span> <?= $dataRevetement['adherence']?> </p>
		<p><span class='bold'>Epaisseur :</span> <?= $dataRevetement['epaisseur']?> </p>
	</section>

	</main><!-- #main -->