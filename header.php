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
		<nav id="primary"><?php wp_nav_menu('primary'); ?></nav>
		<div id="sub-header">
			<div class="newsletter">	
				<h6>Sign up for the Brownstoner daily email:</h6>	
				<form action="index.php">
					<input type="text" name="newsletter" method="post" />
					<input type="submit" name="submit" value="Send" />
				</form>				
			</div>
			<nav id="secondary">
					<?php wp_nav_menu( array('container_class' => 'menu-footer',
					'theme_location' => 'secondary' ) ); 
					?>
			</nav>
			<?php get_sidebar(); ?>
		</div>
	</header>
	<div id="container">	

