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

	<div id="primary">
		<div id="main">
			<div class="container">
				<?php 

				while( have_posts() ): the_post();

					get_template_part( 'template-parts/content', 'single' );

					?>

					<div class="row">
						<div class="pages text-left col-6">
							<?php next_post_link( '&laquo; %link' ); ?>
						</div>
						<div class="pages text-right col-6">
							<?php previous_post_link( '%link &raquo;' ); ?>
						</div>
					</div>

					<?php

					if( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile;

				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>