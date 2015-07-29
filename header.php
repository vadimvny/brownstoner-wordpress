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
		<div class="row">
			<hgroup>
				<h1><a href="<?php home_url('/')?>"><img src="http://cdn.brownstoner.com/wp-content/uploads/2013/06/brownstoner_logo2.png"></a></h1>
			</hgroup>
			<nav id="primary"><?php wp_nav_menu('primary'); ?></nav>
		</div>	
		<div class="sub-header">	
			<div class="row">
				<div class="newsletter small-3 columns">	
					<h6>Sign up for the Brownstoner daily email:</h6>	
					<form action="" method="post" enctype="text/plain">
						<input type="text" name="newsletter" method="post" />
						<input type="submit" name="action" value="GO" />
					</form>				
				</div>
				<div class="small-5 columns">
					<nav id="secondary">
							<?php wp_nav_menu( array('container_class' => 'menu-footer',
							'theme_location' => 'secondary' ) ); 
							?>
					</nav>
				</div>	
				<div class="header-search small-3 columns">
					<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="text" placeholder="Search the blog..." value="<?php echo get_search_query(); ?>" name="s" id="s" class=""/>
						<input type="submit" id="searchsubmit" class="search-right" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />	
					</form>	
				</div>
				<div class="row">			
					<div id="google-image" class="small-8 columns">
						<img src="https://tpc.googlesyndication.com/simgad/2713109792373010528" alt="">
					</div>
				</div>	
			</div>
			<div class="third-row">	
				<div class="row">
					<div class="large-9 columns">
						<div class="row">
							<p class="large-4 columns"><img src="http://www.brownstoner.com/wp-content/themes/incontext/timthumb.php?w=300&amp;h=300&amp;zc=1&amp;src=http://cdn.brownstoner.com/wp-content/uploads/2015/07/affordable-96-Brooklyn-Avenue-1.jpg"></p>
							<p class="large-4 columns"><img src="http://www.brownstoner.com/wp-content/themes/incontext/timthumb.php?w=300&amp;h=300&amp;zc=1&amp;src=http://cdn.brownstoner.com/wp-content/uploads/2015/07/brooklyn-original-six-towns-Bushwick-Brooklyn-Flatlands-Gravesend-New-Utrecht-Flatbush.jpg"></p>	
							<p class="large-4 columns"><img src="http://www.brownstoner.com/wp-content/themes/incontext/timthumb.php?w=300&amp;h=300&amp;zc=1&amp;src=http://cdn.brownstoner.com/wp-content/uploads/2015/07/494-humboldt-street-4-071615.jpg"></p>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</header>
	<div class="row">	

