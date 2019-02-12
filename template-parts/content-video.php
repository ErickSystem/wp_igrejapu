<div class="card" style="width: 18rem;">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid rounded-right border border-dark' ) ); ?></a>
  <div class="card-body">
  	<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	  <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ler Mais</a>
  </div>
</div>