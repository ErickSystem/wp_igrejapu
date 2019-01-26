<?php get_header(); ?>
	<div id="primary">
		<div id="main">
			<div class="container">

				<!-- <h2><? //php _e( 'Buscar resultados para:', 'wpigrejapu' ); ?> < //?php echo get_search_query(); ?></h2> -->
                <h2 class="h2-serach-find"> <?php _e( 'Resultado(s) encontrado(s):', 'wpigrejapu' ); ?> </h2>
				<?php 

                if( have_posts() ):

                    while( have_posts() ): the_post();

                        get_template_part( 'template-parts/content', 'search' );

                        if( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile;

                    $args = array(
                        'previous_string' => __( 'Anterior', 'wpigrejapu'),
                        'next_string' => __( 'Próximo', 'wpigrejapu')
                    );
                    // Pagination                            
                    if ( function_exists('wp_bootstrap_pagination') ){
                        wp_bootstrap_pagination($args);
                    }
				?>
                <?php else: ?>
                    <h4><?php _e( 'Ops, não foi encontrado nenhum post para sua pesquisa...', 'wpigrejapu' ); ?></h4>
                <?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>