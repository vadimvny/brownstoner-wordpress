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
		<h1><a href="<?php home_url('/')?>"><?php bloginfo('name')?></a>	</h1>
		<nav><?php wp_nav_menu(); ?></nav>
	</header>
	<div id="container">	

</html>