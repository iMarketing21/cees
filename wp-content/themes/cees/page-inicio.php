<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>
<div class="banner">
	<?php echo do_shortcode('[image-carousel category="inicio" showcaption="false"]'); ?>
</div>
	<div id="primary" class="content-area">
		<div class="container-fluid">
			<center><h1>Cursos Disponibles</h1></center>
			<div class="hidden-xs">
				<?php include 'carousel-cursos.php';?>
			</div>
			<div class="hidden-sm hidden-md hidden-lg">
				<?php include 'carousel-cursos-phone.php';?>
			</div>
			<div class="clearfix"></div>

			<main id="main" class="site-main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page-inicio' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
