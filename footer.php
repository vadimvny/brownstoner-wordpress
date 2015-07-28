		
		</div><!-- container -->
		<footer>
			<a href="<?php home_url('/')?>"><img class="logo scale" src="http://cdn.brownstoner.com/wp-content/uploads/2013/06/footerlogo.png" width="265" height="100" alt="Brownstoner"></a>
			<table>
				<nav id="ft-primary"><?php wp_nav_menu(); ?></nav>
				<nav id="ft-secondary">
					<?php wp_nav_menu( array('container_class' => 'menu-footer',
					'theme_location' => 'secondary' ) ); 
					?>
				</nav>
			</table>		
		</footer>
	</body>
</html>