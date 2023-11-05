<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rendu_wp
 */

$dataRevetement = get_fields();

$epaisseur = get_field_object('epaisseur');
$value = $epaisseur['value'];
$label = $epaisseur['choices'][$value];

get_header();
?>

<main id="primary" class="site-main">

	<header class="page-header">
		<h1>
			<?php the_title(); ?>
		</h1>
		<h4 class="price">64,90€</h4>
	</header>

	<?php
	while (have_posts()):
		the_post(); ?>

		<div class="product-description">
			<div class="product-image">
				<?php the_post_thumbnail(''); ?>
			</div>
			<div class="product-content">
				<h3>Informations produit</h3>
				<div class="details">
					<div class="detail">
						<p>RAPIDITÉ:</p>
						<p>
							<?= $dataRevetement['rapidite'] ?>
						</p>
					</div>
					<div class="detail">
						<p>CONTRÔLE:</p>
						<p>
							<?= $dataRevetement['controle'] ?>
						</p>
					</div>
					<div class="detail">
						<p>ADHÉRENCE:</p>
						<p>
							<?= $dataRevetement['adherence'] ?>
						</p>
					</div>
					<div class="detail">
						<p>ÉPAISSEUR:</p>
						<p>
							<?php echo esc_html($label); ?>
						</p>
					</div>
				</div>
				<div class="more-details">
					<div class="colors">
						<p>COULEUR</p>
						<div class="color">
							<div class="color-1"></div>
							<div class="color-2"></div>
						</div>
					</div>
					<div class="quantity">
						<p>QUANTITÉ</p>
						<div class="quantity-input">
							<input type="button" value="-">
							<input type="number" value="1">
							<input type="button" value="+">
						</div>
					</div>
					<button>Ajouter au panier</button>
				</div>
			</div>
		</div>
		<?php the_content(); ?>


		<?php
		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'rendu_wp') . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'rendu_wp') . '</span> <span class="nav-title">%title</span>',
			)
		);

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
// get_footer();
