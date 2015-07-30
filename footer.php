		
		</div><!-- container -->
		<footer>
			<div class="row">
				<div class="large-8 columns">
					<div class="row">
						<div class="large-5 columns">
							<a href="<?php home_url('/')?>"><img class="logo scale" src="http://cdn.brownstoner.com/wp-content/uploads/2013/06/footerlogo.png" width="265" height="100" alt="Brownstoner"></a>
						</div>
					<div class="large-2 columns">
						<nav id="ft-primary"><?php wp_nav_menu(); ?></nav>
					</div>
					<div class="large-2 columns">
						<nav id="ft-secondary">
							<?php wp_nav_menu( array('container_class' => 'menu-footer',
							'theme_location' => 'secondary' ) ); 
							?>
						</nav>
					</div>
				</div>
				</div>	
			</div>			
		</footer>
	</body>
</html>