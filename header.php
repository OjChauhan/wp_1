<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html>
<head>
    <title>Design Studio &copy <?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- favicons 
    <link rel="apple-touch-icon" sizes="57x57" href="<?php //echo get_template_directory_uri() ?>/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php //echo get_template_directory_uri() ?>/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php //echo get_template_directory_uri() ?>/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php //echo get_template_directory_uri() ?>/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php //echo get_template_directory_uri() ?>/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php //echo get_template_directory_uri() ?>/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php //echo get_template_directory_uri() ?>/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php //echo get_template_directory_uri() ?>/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php //echo get_template_directory_uri() ?>/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php //echo get_template_directory_uri() ?>/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php //echo get_template_directory_uri() ?>/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php //echo get_template_directory_uri() ?>/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php //echo get_template_directory_uri() ?>/images/favicons/favicon-16x16.png">
    
     favicons -->
     <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/images/sprite.png">
     <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/custom-responsive-style.css">
    <link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/all-plugins.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/plugin-active.js"></script>
</head>
<body data-spy="scroll" data-target=".main-navigation" data-offset="150">
    <section id="MainContainer">
        <!-- Header starts here -->
        <header id="Header">
            <nav class="main-navigation">
                <div class="container clearfix">
                    <div class="site-logo-wrap">
                        <a class="logo" href="http://localhost/wordpress/"><img src="<?php echo get_template_directory_uri()?>/images/sprite.png" alt="Design Studio"></a>
                    </div>
                    <a href="javascript:void(0)" class="menu-trigger hidden-lg-up"><span>&nbsp;</span></a>
                    <div class="main-menu hidden-md-down">
											<?php
											wp_nav_menu(
												array(
													'theme_location' =>'primary', // This is location of menu
													'menu' => 'Temp', // This is for defining which menu to use
													'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',
												)
											);
													?>



										<!--      <ul class="menu-list">
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#HeroBanner">Home</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#Services">Services</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#About">About</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#Portfolio">Portfolio</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#ContactUs">Contact</a></li>
                        </ul>
										-->
                    </div>
                </div>
								<!--
                <div class="mobile-menu hidden-lg-up">
                    <ul class="mobile-menu-list">
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#HeroBanner">Home</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#Services">Services</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#About">About</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#Portfolio">Portfolio</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#ContactUs">Contact</a></li>
                    </ul>
                </div>
							-->
            </nav>
        </header>
				<!-- Header ends here -->
