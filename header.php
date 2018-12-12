<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="igrejapu-header">
		<section class="menu-area">
			<div class="container">
				<div class="row igrejapu-header-middle">
					<div class="align">
						
						<div class="igrejapu-slot-l col-md-2 col-12 text-left hidden-xl-up">
							<section class="logo">
								<?php the_custom_logo(); ?>
							</section>
						</div>
						<div class="igrejapu-slot-r col-md-10 text-right">
							<nav class="main-menu">
								<?php 
								wp_nav_menu( 
									array( 
										'theme_location' => 'my_main_menu' 
									) 
								); 
								?>
							</nav>	
						</div>

						<div class="col-sm-2 ">
							<ul class="igrejapu-action col-4">
								<li>
									<span>
										<a href="#janela" rel="Modal"><img src="<?php echo get_template_directory_uri() . '/images/google-web-search.png'; ?>" class="img-fluid"></a>
									</span>
								</li>
							</ul>
						</div>
										
					</div>

				</div>
			</div>
		</section>
	</header>
	<!-- Chamada do Modal de busca -->
	<div class="window" id="janela">
		<div class="col-md-12 col-12 text-right">
			<a href="#" class="fechar" alt="sair">
				<i class="material-icons">close</i>
			</a>
		</div>
		<div class="form-wpsearch col-md-12 col-12">
			<?php get_search_form(); ?>
		</div>

	</div>
	<div id="mascara"></div>