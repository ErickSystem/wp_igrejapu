<?php get_header(); ?>

<div class="content-area">
    <main>
        <section class="slide">
            <?php 
                $design = get_theme_mod( 'set_slider_option' );
                $limit = get_theme_mod( 'set_slider_limit' );

                echo do_shortcode( '[recent_post_slider design="design-' . $design . '" limit=" ' . $limit  . '"]' ); 
            ?>               
        </section>
        <section class="middle-area">
            <div class="container">

                <article class="-popular-galary">
                    <h1><?php _e( "Popular Galeria de Fotos", 'wpigrejapu' ); ?></h1>    
                    <div class="row">
                            <div class="col-lg-4 col-md-8 col-sm-12">
                                <h2>Fotos</h2> 
                            </div>    
                        </div>
                </article>
                
                <article class="-popular-video">
                    <h1><?php _e( "Popular Galeria de Vídeos", 'wpigrejapu' ); ?></h1>    
                    <div class="row">
                        <div class="col-lg-4 col-md-8 col-sm-12">
                            <h2>Vídeos</h2>
                        </div>    
                    </div>
                </article>

                <article class="-latest-news">
                    <h1><?php _e( "Últimos Artigos", 'wpigrejapu' ); ?></h1>    
                    <div class="row">
                        <div class="col-lg-4 col-md-8 col-sm-12">
                            <h2>Últimas Postagens</h2>
                        </div>    
                    </div>
                </article>
                
            </div>				
        </section>
    </main>
</div>

<?php get_footer(); ?>