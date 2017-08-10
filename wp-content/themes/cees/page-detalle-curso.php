<?php
/*
Template Name: Descripción Curso
*/
?>

<?php get_header('login'); ?>

<!-- TITULO CURSO -->

<div class="titulo-curso-bg">
	<div class="titulo-curso">
		<h1>Estrategias para un desempeño exitoso en la seguridad privada</h1>
		<p>Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro.</p>
		<center><a href="#" class="btn-gratis">UNISER AL CURSO</a></center>
	</div>
</div>
<div class="detalles-curso">
	<div class="row">
		<div class="col-xs-6 col-sm-4">
			<h4>Módulo</h4>
			<p>4 Clases</p>
		</div>
		<div class="col-xs-6 col-sm-4">
			<h4>Intensidad</h4>
			<p>2 horas a las semana </p>
		</div>
		<div class="col-xs-12 col-sm-4">
			<h4>Certificado</h4>
			<p>Acreditación de Culminación</p>
		</div>
	</div>
</div>

<!-- CONTENIDO CURSO -->
<div class="container-fluid">
<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">¿Qué vas a aprender?</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">¿A quién va dirigido?</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Programa de estudios</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    	<p>Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro.</p>

		<p>Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca.</p>

		<p>Así que, no debes congojarte por las desgracias que a mí me suceden, pues a ti no te cabe parte dellas. Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro.</p>

		<p>Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca. Así que, no debes congojarte por las desgracias que a mí me suceden, pues a ti no</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
    	<p>Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro.</p>

		<p>Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca.</p>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
    	<p>Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca. Así que, no debes congojarte por las desgracias que a mí me suceden, pues a ti no</p>
    </div>
  </div>
</div>

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
