
    <div class="single-content single-content-layout">
        <article class="single-content-box">
                <div class="row">
                    <div class="card-body">
                        <div class="single-box-bg single-box col-md-11">
                            <div class="card-category">
                                <?php the_category( ' ' ); ?>
                            </div><!--card-category-->

                            <div class="title">
                                <h1><?php echo get_the_title();?></h1>
                            </div><!--title-->

                            <div class="author">
                                <div class="align">
                                    <div class="meta-author">
                                    <span class="vcard-author">
                                        <?php _e( 'Por: ', 'wpcurso' ); ?> <?php the_author_posts_link(); ?>
                                    </span>
                                    </div><!-- meta-author-->

                                    <div class="meta-thetime">
                                    <span class="vcard-author">
                                        <?php the_time('F j, Y g:i a'); ?>
                                    </span>
                                    </div><!--meta-thetime-->
                                    
                                </div><!-- align -->
                            </div><!--author-->
                            <div class="single-text-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <div><!--card-body-->

                </div><!--row-->
        </article>
    </div><!--single-content-->

    <aside class="single-comment">
        <div class="container">
            <div class="row">
                <div class="single-comment-content col-md-8">
                    <?php
                        if( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </aside>