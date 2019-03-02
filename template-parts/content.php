<article class="pu-posts card">
    <div class="align">
        <div class="entry-image">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-fluid' ) ); ?></a>
        </div>

        <div class="card-body">

          <div class="card-category">
            <?php the_category( ' ' ); ?>
          </div><!--card-category-->

          <div class="title">
            <h3><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 15, '...' );?></a></h3>
          </div><!--title-->

          <div class="content">
            <?php the_excerpt(); ?>
          </div><!--content-->

          <div class="author">
            <div class="align">

              <div class="meta-author">
                <span class="vcard-author">
                  <?php _e( 'Por: ', 'wpcurso' ); ?> <?php the_author_posts_link(); ?>
                </span>
              </div><!-- meta-author-->
              <div class="meta-thetime">
                <span class="vcard-author">
                  <?php the_time('F j, Y'); ?>
                </span>
              </div><!--meta-thetime-->
              
            </div><!-- align -->
          </div><!--author-->
          
        <div><!--card-body-->
    </div><!-- align -->
</article><!--pu-posts -->
