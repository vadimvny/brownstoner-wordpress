<?php get_header(); ?>
<div class="row">
	<div id="main" class="large-9 columns left">	
		<?php while ( have_posts() ) : the_post(); ?>
			<h2><a href="<?php the_permalink();?>"><?php the_title() ?></a></h2>		
			<p>Written by: 
			<?php echo get_the_author_link(); ?></p>
			<?php the_content(__('Continue Reading')); ?>
			</br>
		<?php endwhile; ?>
	</div>	
	<div class="large-3 columns right">
			<?php get_sidebar(); ?>
	</div>
</div>	
<?php get_footer(); ?>
