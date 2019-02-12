<?php get_header(); ?>

<div class="content-area">
    <main>
        <section class="slide">
            <?php 
                $design = get_theme_mod( 'set_slider_option' );
                $limit = get_theme_mod( 'set_slider_limit' );
                $speed = get_theme_mod( 'set_slider_speed' );

                echo do_shortcode( '[recent_post_slider speed="'. $speed .'" design="design-' . $design . '" limit=" ' . $limit  . '"]' ); 
            ?>               
        </section>
        <section class="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h3 class="popular-subtitle"><?php _e( "Galeria de Fotos", 'wpigrejapu' ); ?></h1>    
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-12 col-sm-12">
                        <?php echo do_shortcode( '[wcp-carousel id="185"]' ); ?> 
                    <div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h3 class="popular-subtitle"><?php _e( "Galeria de Vídeos", 'wpigrejapu' ); ?></h1>    
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-12 col-sm-12">
                        <?php echo do_shortcode( '[wcp-carousel id="191"]' ); ?>  
                    <div>
                </div>
            </div>				
        </section>
        <section class="members">
            <div class="container">
                <h1>Obras Realizadas</h1>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php 
                                if ( is_active_sidebar( 'services-1' ) ){
                                    dynamic_sidebar( 'services-1' );
                                } 
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php 
                                if ( is_active_sidebar( 'services-2' ) ){
                                    dynamic_sidebar( 'services-2' );
                                } 
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php 
                                if ( is_active_sidebar( 'services-3' ) ){
                                    dynamic_sidebar( 'services-3' );
                                } 
                            ?>
                        </div>
                    </div>
                </div>
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