<footer class="igrejapu-footer">

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-sm-12">
                LAYOUT 1
            </div>
            <div class="col-lg-4 col-md-8 col-sm-12">
                LAYOUT 1
            </div>
            <div class="col-lg-4 col-md-8 col-sm-12">
                LAYOUT 1
            </div>
        </div>
    </div>
    <div class="igrejapu-copyright text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-12 offset-md-12 col-lg-12 offset-lg-12">
                    <p style="text-align: center">
                        <?php 
                            $text_copyright = get_theme_mod( 'set_copyright' );
                            $url_createdby = get_theme_mod( 'set_copyright_createdby' );
                            $url_poweredby = get_theme_mod( 'set_copyright_poweredby' );
                        ?>
                        <?php echo $text_copyright; ?>
                        <a href="<?php echo $url_createdby; ?>" target="_blank">Erick Henrique</a>
                        <?php _e( "Distribuído por", 'wpigrejapu' ); ?>
                        <a href="<?php echo $url_poweredby; ?>" target="_blank">WordPress</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</footer>
<?php wp_footer(); ?>	
</body>
</html>
