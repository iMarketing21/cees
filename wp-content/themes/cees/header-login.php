<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cees
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<base href="http://localhost/cees/">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
	<link rel="manifest" href="ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="ico/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <div class="logo"><img src="img/logo-cees.png" class="img-responsive"></div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos Disponibles <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Estrategias para un desempeño exitoso en la seguridad privada</a></li>
		            <li><a href="#">Inducción General</a></li>
		            <li><a href="#">La seguridad como proyecto de vida</a></li>
		          </ul>
		        </li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		     	<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mis Cursos <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Inducción General</a></li>
		            <li><a href="#">La seguridad como proyecto de vida</a></li>
		          </ul>
		        </li>
            	<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> (1) Cursos Agregados</a></li>
            	<li class="iniciar"><a href="#">Mi Perfil</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
	</header><!-- #masthead -->

		<!--<nav id="site-navigation" class="main-navigation">

		</nav> #site-navigation -->
	<div id="content" class="site-content">
