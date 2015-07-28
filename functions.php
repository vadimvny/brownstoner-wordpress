<?php
	 register_nav_menus( array(
		 'primary' => __( 'Primary Menu'),
		 'secondary' => __( 'Secondary Menu'),
		 ) );
	register_sidebar( array(
	    'id'          => 'right-sidebar',
	    'name'        => __( 'Right Sidebar'),
	    'description' => __( 'This sidebar is located above on the right.'),
) );
?>