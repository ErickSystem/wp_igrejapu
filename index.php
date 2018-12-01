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

                        <?php 
                            endwhile;

                            ?>
                                
                            <div class="row">
                                <div class="pages text-left col-6">
                                    <?php previous_posts_link( __( "<<Postagens Nova", 'wpigrejapu' ) ); ?>
                                </div>
                                <div class="pages text-right col-6">
                                        <?php next_posts_link( __( "Postagens Antiga>>", 'wpigrejapu' ) ); ?>
                                </div>
                            </div>


                            <?php
                        else:
                        ?>

                            <p><?php _e( 'Ainda não há nada para ser exibido...', 'wpigrejapu' ); ?></p>

                        <?php endif; ?>

                    </div>
                    <?php get_sidebar( 'blog' ); ?>						
                </div>
            </div>				
        </section>
    </main>
</div>

<?php get_footer(); ?>