<?php get_header(); ?>

<!-- Breadcrumb -->
<div class="container">
  <div class="row">
       <?php
       if ( function_exists('yoast_breadcrumb') ) {
         yoast_breadcrumb( '<p id="breadcrumbs" class="mt-5 pl-3">','</p>' );
       }
       ?>
   </div>
</div>
<!-- Breadcrumb -->

<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    
                    <div class="news col-10 col-md-8 col-sm-12">
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