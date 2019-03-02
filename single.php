<?php get_header(); ?>

	<!-- Breadcrumb -->
	<div class="container">
		<div class="row">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs" class="mt-5 pl-3">','</p>' );
			}
			?>
		</div>
	</div>
	<!-- Breadcrumb -->

	<div class="cover-area cover-single">
		<div class="cover-item">
			<div class="cover-item-bg">
				<span class="cover-img">
					<?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
				</span>
			</div>
		</div>
	</div><!-- single-area-->
	<div class="single-content-site container">
		<?php 
			while( have_posts() ): the_post();
				get_template_part( 'template-parts/content', 'single' );
			endwhile;
		?>
	</div><!--single-content-site-->

<?php get_footer(); ?>