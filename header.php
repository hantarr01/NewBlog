<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewMaket
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/css/materialize.min.css"  media="screen,projection"/>
<link href="<?= bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css">

 	<title><?php bloginfo('name'); ?></title>
 	<?php wp_head();?>
</head>
<body>

<header>
 		
<div class="evangilisticBorder"></div>

<div class="buttonsMenu">

	<ul style="float: right;">

		<li>
			<a href="">MENU</a>
		</li>

		<li>
			<a href="">ABOUT US</a>
		</li>

		<li>
			<a href="">PORTFOLIO</a>
		</li>

		<li>
			<a href="">SERVICES</a>
		</li>

		<li>
			<a href="">OYR BLOG</a>
		</li>

		<li>
			<a href="">ELEMENTS</a>
		</li>

		<li>
			<a href="">CONTACT US</a>
		</li>

	</ul>

</div>

<div class="titleBlock"></div>

<div class="ballLogo"></div>

</header> 
