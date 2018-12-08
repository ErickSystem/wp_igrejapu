<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    
    <header>
        <h1><?php the_title(); ?></h1>
		<div class="meta-info">
			<p><?php _e( 'Postado em:', 'wpigrejapu' ); ?> <?php echo get_the_date(); ?> <?php _e( 'por', 'wpigrejapu' ); ?> <?php the_author_posts_link(); ?></p>
			<p><?php _e( 'Categorias:', 'wpigrejapu' ); ?> <?php the_category( ' ' ); ?></p>
			<p><?php the_tags( __( 'Tags: ', 'wpigrejapu' ), ', ' ); ?></p>		
		</div>
    </header>

    <div class="content col-8">
        <?php the_content(); ?>
    </div>

</article>