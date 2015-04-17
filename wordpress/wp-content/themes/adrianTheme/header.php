<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Forum&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
   	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"> 

    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!-- <?php wp_head(); ?> -->
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header>
			<div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 text-center ForumFont">
            <!-- <h1 style="border-bottom: 1px solid grey;"><span class="">Достоевский<span><h1> -->
            <h1>Достоевский Ф.М.</h1>
              <ul class="logoMenu">
                <li class="active"><a href="#"><h3>Книги</h3></a></li>
                <li><a href="#" ><h3>Аудиокниги</h3></a></li>
                <li><a href="#"><h3>Биография</h3></a></li>
                <li><a href="#"><h3>Экранизации</h3></a></li>
              </ul>
          </div>
        </div>
      </div> <!--/ Container -->

        <div class="logoSearch">
          <input class="form-control search-query" value="Поиск по сайту">
        </div>
		</header><!-- #masthead -->

		<div id="main" class="site-main">


