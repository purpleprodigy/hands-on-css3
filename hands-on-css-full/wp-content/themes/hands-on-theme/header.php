<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>
</title>
	<meta name="viewport" content="width=device-width">
	<meta name="Description" <?php language_attributes(); ?> content="<?php bloginfo('description'); ?>">
	<meta name="robots" content="index, follow">
	<meta name="robots" content="noodp, noydir">
	<!-- Icons links -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo IMAGES; ?>/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo IMAGES; ?>/apple-touch-icon-120x120-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo IMAGES; ?>/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo IMAGES; ?>/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo IMAGES; ?>/apple-touch-icon-precomposed.png">
	<link rel="shortcut icon" href="/favicon.ico">
	<!-- CSS links -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo CSS; ?>/normalize.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo CSS; ?>/base.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo CSS; ?>/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo CSS; ?>/modules.css" type="text/css" media="all">
	<!-- Conditional comments -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="<?php echo JS; ?>/respond.min.js"></script>
	<![endif]-->
    <?php wp_head(); ?>
</head>


