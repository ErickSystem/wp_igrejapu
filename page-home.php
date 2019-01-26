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

                <article class="popular-galary">
                    <h1><?php _e( "Popular Galeria de Fotos", 'wpigrejapu' ); ?></h1>    
                    <?php echo do_shortcode( '[wcp-carousel id="185"]' ); ?>
                </article>
                
                <article class="popular-video">
                    <h1><?php _e( "Popular Galeria de Vídeos", 'wpigrejapu' ); ?></h1>    
                    <?php echo do_shortcode( '[wcp-carousel id="191"]' ); ?>
                </article>

                <article class="latest-news">
                    <h1><?php _e( "Últimos Artigos", 'wpigrejapu' ); ?></h1>    
                    <?php echo do_shortcode( '[wcp-carousel id="223"]' ); ?>
                </article>
                
            </div>				
        </section>
        <section class="map">
            <?php 
               //$key = get_theme_mod( 'set_map_apikey' );
               //$address = urldecode( get_theme_mod( 'set_map_address' ) );
            ?>
            <!-- <iframe
            width="100%"
            height="350"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=<?//php echo $key; ?>
                &q=<?//php echo $address; ?>&zoom=15" allowfullscreen>
            </iframe> -->
        </section>
    </main>
</div>

<?php get_footer(); ?>