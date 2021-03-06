<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package treehouse
 */
?><!DOCTYPE html>
<!--
 _____               _                     
/__   \___ _ __ ___ | |__  _   _ ___ _   _ 
  / /\/ _ \ '_ ` _ \| '_ \| | | / __| | | |
 / / |  __/ | | | | | |_) | |_| \__ \ |_| |
 \/   \___|_| |_| |_|_.__/ \__,_|___/\__,_|
   ___      _ _                 
  / __\___ | | | ___  __ _  ___ 
 / /  / _ \| | |/ _ \/ _` |/ _ \
/ /__| (_) | | |  __/ (_| |  __/
\____/\___/|_|_|\___|\__, |\___|
                     |___/      

If you're looking at this, you've probably got some web design chops. 
If you're ALSO a Tembusian, please contribute by getting in touch with the people behind Treehouse!

-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />

<?php wp_head(); ?>
<!--[if lt IE 9]>
<link rel="stylesheet" href="/css/ie.css">
<![endif]-->

<!--IE Fix for HTML5 Tags-->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header class="row masthead" role="banner">
        <div class="small-12 large-4 columns">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img alt="Treehouse, A Tembusu Publication" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" title="Treehouse, A Tembusu Publication" />
            <h1 class="wordmark">Treehouse</h1>
          </a>
        </div><!-- small-12 large-4 columns -->

        <nav id="navbar" class="small-12 large-8 columns" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 
                                'container' => false,
                                'menu_class' => 'nav-list' ) ); ?>
		    </nav><!-- #site-navigation -->
      </div><!-- masthead -->

	</header>
	<div id="content" class="site-content">
