<?php get_header(); ?>

<div class="content-area">
    <main>
        <!-- AREA DE SLIDER -->
        <section class="slide">
            <?php 
                $design = get_theme_mod( 'set_slider_option' );
                $limit = get_theme_mod( 'set_slider_limit' );
                $speed = get_theme_mod( 'set_slider_speed' );

                echo do_shortcode( '[recent_post_slider speed="'. $speed .'" design="design-' . $design . '" limit=" ' . $limit  . '"]' ); 
            ?>               
        </section> <!-- FIM DO SLIDER -->
        <!-- AREA DE SLIDER -->
        <section class="popular-posts">
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
            <br><br>			
        </section><!-- fim popular-posts -->
        <!-- members -->
        <section class="members"></section> <!-- fim members -->
        <!--Services Section-->
        <section class="services-area fix" id="services">
            <div class="services-hedding">
                <!--Section Title-->
                <h2>Missão, Visão, Valor</h2><!--/ Section Title-->
                <div class="viline"></div>
            </div>
            <div class="services-contents">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <!--Single Service-->
                            <div class="single-service">
                                
                                <div class="single-service-content text-right">
                                    <h2>Missão</h2>
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>
                                </div>
                                <div class="single-service-icon text-right">
                                    <!--<i class="fa fa-desktop"></i>-->
                                    <img src="http://placehold.it/220x220/F4F4F4/000" width="100" alt="star"  />
                                </div>

                            </div><!--/ Single Service-->
                        </div> <!-- collumn -->
                        <div class="col-sm-4 col-md-4">
                            <!--Single Service-->
                            <div class="single-service">
                                
                                <div class="single-service-content text-right">
                                    <h2>Visão</h2>
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>
                                </div>
                                <div class="single-service-icon text-right">
                                    <!--<i class="fa fa-desktop"></i>-->
                                    <img src="http://placehold.it/220x220/F4F4F4/000" width="100" alt="star"  />
                                </div>

                            </div><!--/ Single Service-->
                        </div> <!-- collumn -->
                        <div class="col-sm-4 col-md-4">
                            <!--Single Service-->
                            <div class="single-service">
                                
                                <div class="single-service-content text-right">
                                    <h2>Valor</h2>
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>
                                </div>
                                <div class="single-service-icon text-right">
                                    <!--<i class="fa fa-desktop"></i>-->
                                    <img src="http://placehold.it/220x220/F4F4F4/000" width="100" alt="star"  />
                                </div>

                            </div><!--/ Single Service-->
                        </div> <!-- collumn -->
                    </div><!-- row -->
                </div><!-- container -->
            </div> <!--services-contents-->
		</section><!--/ Services Section-->
        <!-- map -->
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
        </section> <!-- fim mapa -->
    </main>
</div>

<?php get_footer(); ?>