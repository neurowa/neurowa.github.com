<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <base href="../../../../">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Synapse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS
    ================================================== -->
    <link href='../../../../css/font.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../../css/bootstrap-responsive.css">
    <link rel="stylesheet" href="../../../../css/prettyPhoto.css" />
    <link rel="stylesheet" href="../../../../css/custom-styles.css">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" href="css/style-ie.css"/>
    <![endif]--> 

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="../../../../img/favicon.ico">
    <link rel="apple-touch-icon" href="../../../../img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../../../img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../../../img/apple-touch-icon-114x114.png">

    <!-- JS
    ================================================== -->
    <script src="../../../../js/jquery-1.8.3.min.js"></script>
    <script src="../../../../js/jquery.easing.1.3.js"></script>
    <script src="../../../../js/bootstrap.js"></script>
    <script src="../../../../js/jquery.prettyPhoto.js"></script>
    <script src="../../../../js/jquery.quicksand.js"></script>
    <script src="../../../../js/jquery.custom.js"></script>
        

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    


	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
<!-- Begin Header -->
<div id="Header"></div>	
<script>$('#Header').load('../MHeader.htm');</script>
<!-- End Header -->
     

		<div id="content" class="site-content">
