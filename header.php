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
						
						<div class="igrejapu-slot-l col-md-2 col-12 text-left">
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
										<a href="#"><img src="https://img.icons8.com/windows/50/000000/google-web-search.png" class="img-fluid"></a>
									</span>
								</li>
							</ul>
						</div>
						
											
					</div>

				</div>
			</div>
		</section>
    </header>