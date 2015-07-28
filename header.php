<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('title')?></title>
	<!--[if lt IE 9]>
    <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php wp_head()?>
</head>
<body>
	<header>
		<hgroup>
			<h1><a href="<?php home_url('/')?>"><img src="http://cdn.brownstoner.com/wp-content/uploads/2013/06/brownstoner_logo2.png"></a></h1>
		</hgroup>
		<nav><?php wp_nav_menu(); ?></nav>
	</header>
	<div id="container">	
