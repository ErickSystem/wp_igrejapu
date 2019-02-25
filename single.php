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

	<div class="single-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php 
						while( have_posts() ): the_post();
							get_template_part( 'template-parts/content', 'single' );
						endwhile;
					?>
				</div>
			</div><!--row-->
		</div><!-- container -->
	</div><!-- single-area-->

<?php get_footer(); ?>