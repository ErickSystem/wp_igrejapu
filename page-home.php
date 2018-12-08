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
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <?php 
                                   
                                ?>
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
                        <h1><?php _e( 'Últimas Postagens', 'wpigrejapu' ); ?></h1>
                            <div class="row">
                                <?php 

                                // the query
                                $loop1cats = get_theme_mod( 'set_loop1_categories' );
                                $per_page = get_theme_mod( 'set_posts_per_page' );

                                $currentPage = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
                                $args=array(
                                    'post_type' => 'post',
                                    'paged' => $currentPage,// add this line 
                                    'post_status' => 'publish',
                                    'posts_per_page' => $per_page
                                   );

                                $featured = new WP_Query( $args );?>

                                <?php if ( $featured->have_posts() ) : ?>

                                    <!-- pagination here -->

                                    <!-- the loop -->
                                    <?php while ( $featured->have_posts() ) : $featured->the_post(); ?>
                                        <div class="col-12">
                                            <?php get_template_part( 'template-parts/content', 'featured' ); ?>
                                        </div>
                                    <?php endwhile; ?>
                                    <!-- end of the loop -->

                                    <?php wp_reset_postdata(); ?>

                                <?php else : ?>
                                    <p><?php _e( 'Desculpe, nenhum post corresponde aos seus critérios.', 'wpigrejapu' ); ?></p>
                                <?php endif; ?>

                            </div>
                        </div>    
                    </div>
                </article>
                
            </div>				
        </section>
        <!--<section class="map">
            <?php 
                //$key = get_theme_mod( 'set_map_apikey' );
                //$address = urldecode( get_theme_mod( 'set_map_address' ) );
            ?>
            <iframe
            width="100%"
            height="350"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=<?php //echo $key; ?>
                &q=<?php //echo $address; ?>&zoom=15" allowfullscreen>
            </iframe>
        </section> -->
    </main>
</div>

<?php get_footer(); ?>