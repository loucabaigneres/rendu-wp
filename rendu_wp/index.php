<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rendu_wp
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	if (have_posts()):

		/* Start the Loop */
		while (have_posts()):
			the_post(); ?>

			<header class="page-header">
				<h1>Bienvenue sur le site de PingPassion !</h1>
			</header><!-- .page-header -->

			<section class="grid">
				<a href="revetements">
					<div class="container">
						<h2>Nos revêtements</h2>
						<div class="img-home">
							<img src="<?php the_field('img-revetement', 'option'); ?>" alt="">
						</div>
						<p>Plongez dans le monde délirant du ping-pong avec nos revêtements de raquette de tennis de table ! Nos
							revêtements sont tellement incroyables que même les balles se demandent s'ils sont en train de jouer
							au
							ping-pong ou de participer à une soirée disco.</p>
					</div>
				</a>
				<a href="bois">
					<div class="container">
						<h2>Nos bois</h2>
						<div class="img-home">
							<img src="<?php the_field('img-bois', 'option'); ?>" alt="">
						</div>
						<p>Plongez dans le monde enchanté du ping-pong avec nos bois de raquette de tennis de table ! Nos bois
							sont
							si incroyables qu'ils rendraient jaloux même Pinocchio. Avec des bois qui sont plus légers que l'air
							et
							plus solides que les promesses électorales, vous deviendrez la légende du ping-pong que personne
							n'osera
							affronter.</p>
					</div>
				</a>
			</section>

			<?php
			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			 */
			// get_template_part('template-parts/content', get_post_type());
	
		endwhile;

		// the_posts_navigation();
	
	else:

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<?php
// get_footer();
