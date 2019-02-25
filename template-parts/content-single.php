<article class="single-content">
    
    <div class="row">
        <div class="single-title col-md-5 col-sm-3">
            <h1><?php the_title(); ?></h1>
            <div class="meta-info">
                <p><?php _e( 'Postado em:', 'wpigrejapu' ); ?> <?php echo get_the_date(); ?> <?php _e( 'por', 'wpigrejapu' ); ?> <?php the_author_posts_link(); ?></p>
                <p><?php _e( 'Categorias:', 'wpigrejapu' ); ?> <?php the_category( ' ' ); ?></p>
                <p><?php the_tags( __( 'Tags: ', 'wpigrejapu' ), ', ' ); ?></p>		
            </div>
        </div>
    </div>
    <div class="row">
        <div class="single-text-content col-md-5 col-sm-5">
            <?php the_content(); ?>
        </div>
    </div>

</article>
<aside class="single-comment">
    <div class="row">
        <div class="single-comment-content col-md-8">
            <?php
                if( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>
        </div>
    </div>
</aside>