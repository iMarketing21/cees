<?php
/*
Template Name: Curso
*/
?>

<?php get_header('login'); ?>

<!-- TITULO CURSO -->

<div class="titulo-curso-bg">
	<div class="titulo-curso">
		<h1>Estrategias para un desempeño exitoso en la seguridad privada</h1>
		<br/>
		<p>¿Cómo vas con tu curso?</p>
		<div class="progress">
		  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		    <span class="sr-only">60% Complete</span>
		  </div>
		</div>
	</div>
</div>

<!-- CONTENIDO CURSO -->
<div class="container-fluid curso">
	<div class="col-md-9">
		<h2>Programa del curso:</h2>
		<div class="title-modulo">
			<div class="row">
				<div class="col-md-8">Modulo 1 - Nombre del Modulo</div>
				<div class="col-md-4"><span class="aprobado"><i>Exámen Aprobado</i></span></div>
			</div>
		</div>
		<div class="contenido-modulo">
			<ol>
				<li><a href="#">Nombre de Clase</a></li>
				<li><a href="#">Nombre de Clase</a></li>
				<li><a href="#">Nombre de Clase</a></li>
			</ol>
		</div>
		<div class="title-modulo">
			<div class="row">
				<div class="col-md-8">Modulo 1 - Nombre del Modulo</div>
				<div class="col-md-4"><span class="no-aprobado"><i>Exámen Aprobado</i></span></div>
			</div>
		</div>
		<div class="contenido-modulo">
			<ol>
				<li><a href="#">Nombre de Clase</a></li>
				<li><a href="#">Nombre de Clase</a></li>
				<li><a href="#">Nombre de Clase</a></li>
			</ol>
		</div>
	</div>
	<div class="col-md-3">
		<h4>Sobre este curso:</h4>
		<p>Una mañana, tras un sueño intranquilo, Gregorio Samsa se despertó convertido en un monstruoso insecto.</p>

		<p>Estaba echado de espaldas sobre un duro caparazón y, al alzar la cabeza, vio su vientre convexo y oscuro, surcado por curvadas callosidades, sobre el que casi no se aguantaba la colcha, que estaba a punto de escurrirse hasta el suelo. Numerosas patas, penosamente delgadas en comparación con el grosor normal de sus piernas, se agitaban sin concierto.</p>
	</div>
</div>
<div class="row"></div>
<hr/>
<!-- CURSOS DISPONIBLES -->

	<div id="primary" class="content-area">
		<div class="container-fluid">
			<center>
				<h1>Cursos Disponibles</h1>
			</center>
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
