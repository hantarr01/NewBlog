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


<link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oxygen" rel="stylesheet"> 
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

	<ul class="menu">

		<li class="linksMenu">
			 <i class="large material-icons">home</i>
			<a href="" class="margMenu">MENU</a>
		</li>

		<li class="linksMenu">
			 <i class="Small material-icons">insert_drive_file</i>
			<a href="" class="margMenu">ABOUT US</a>
		</li>

		<li class="linksMenu">
			 <i class="Small material-icons">photo</i>
			<a href="" class="margMenu">PORTFOLIO</a>
		</li>

		<li class="linksMenu">
			 <i class="Small material-icons">work</i>
			<a href="" class="margMenu">SERVICES</a>
		</li>

		<li class="linksMenu2">
			 <i class="Small material-icons">message</i>
			<a href="" class="margMenu"> OUR BLOG</a>
		</li>

		<li class="linksMenu">
			 <i class="Small material-icons">attach_file</i>
			<a href="" class="margMenu">ELEMENTS</a>
		</li>

		<li class="linksMenu2">
			 <i class="Small material-icons">mail</i>
			<a href="" class="margMenu">CONTACT US</a>
		</li>

	</ul>
</div>

<div class="titleBlock">

	<div class="title">News & Blog</div>

	<p class="smallTitle">

	<i class="large material-icons">home</i>
	/ NEWS AND BLOG

	</p>

</div>

<div class="ballLogo">
	<div class="inBallLogo"><img class="responsive-img" src="<?= bloginfo('template_directory'); ?>/img/Logo.png"></div>
</div>

</header> 
