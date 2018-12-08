<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						
						<div class="error-404">
						
						<header>
							<h1><?php _e( 'Página não encontrada', 'wpigrejapu' ); ?></h1>
							<p><?php _e( 'Infelizmente, a página que você tentou acessar não existe neste site!', 'wpigrejapu' ); ?></p>
						</header>

						<div class="error">
							<p><?php _e( 'Que tal fazer uma pesquisa??', 'wpigrejapu' ); ?></p>
							<?php get_search_form(); ?>
							<?php the_widget( 
								'WP_Widget_Recent_Posts', 
								array( 
									'title' => __( 'Últimas postagens', 'wpigrejapu' ), 
									'number' => 3 
								) 
							); 
							?>
						</div>

						</div>
											
					</div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>