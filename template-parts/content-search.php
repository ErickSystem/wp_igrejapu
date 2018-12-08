<article <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="meta-info">
		<p><?php _e( 'Publicado em', 'wpigrejapu' ); ?> <?php echo get_the_date(); ?> <?php _e( 'Por', 'wpigrejapu' ); ?> <?php the_author_posts_link(); ?></p>
		<?php if( has_category() ):  ?>
			<p><?php _e( 'Categorias:', 'wpigrejapu' ); ?> <?php the_category( ' ' ); ?></p>
		<?php endif; ?>
		<p><?php the_tags( __( 'Tags: ', 'wpigrejapu' ), ', ' ); ?></p>
	</div>
	<?php the_excerpt(); ?>
</article>