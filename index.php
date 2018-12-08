<?php get_header(); ?>

<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    
                    <div class="news col-md-8">
                        <?php 
                        // Se houver algum post
                        if( have_posts() ):
                            // Enquanto houver posts, mostre-os pra gente
                            while( have_posts() ): the_post();

                        ?>
                            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                            <?php endwhile; 
                            
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
                            <p><?php _e( 'Ainda não há nada para ser exibido...', 'wpigrejapu' ); ?></p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>				
        </section>
    </main>
</div>

<?php get_footer(); ?>