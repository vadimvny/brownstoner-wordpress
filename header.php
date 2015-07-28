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
				<form action="" method="post" enctype="text/plain">
					<input type="text" name="newsletter" method="post" />
					<input type="submit" name="action" value="GO" />
				</form>				
			</div>
			<nav id="secondary">
					<?php wp_nav_menu( array('container_class' => 'menu-footer',
					'theme_location' => 'secondary' ) ); 
					?>
			</nav>
			<div class="header-search">
				<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<div>
						<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
						<input type="text" placeholder="Search the blog..." value="<?php echo get_search_query(); ?>" name="s" id="s" />
						<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
					</div>
				</form>
			</div>
			<div id="google-image"><img src="https://tpc.googlesyndication.com/simgad/2713109792373010528" alt=""></div>
			<div id="inner horizantal">
				<ul>
					
				</ul>
			</div>
		</div>
	</header>
	<div id="container">	

