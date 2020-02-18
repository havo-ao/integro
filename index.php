<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Integro
 */

get_header();
?>

	
</row>

<!-- Slider -->
<section class="container-fluid p-0">
	<div id="carouselCaptions" class="carousel slide" data-ride="carousel">
		
		<div class="carousel-prnx col-lg-2 col-md-3 col-sm-4 mx-auto pb-lg-5 pb-md-3 pb-sm-1 pr-0 mb-lg-4 mb-md-2 mb-sm-1">
			
				<a class="carousel-control-prev mx-auto" href="#carouselCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
			
			<div class="carousel-indicators">
				<li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselCaptions" data-slide-to="1"></li>
				<li data-target="#carouselCaptions" data-slide-to="2"></li>
			</div>
			
				<a class="carousel-control-next mx-auto" href="#carouselCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			
		</div>
		

		<nav class="integro-menu navbar navbar-dark p-lg-5 p-md-4 p-sm-3">
			<a class="navbar-brand m-0" href="#">MENU</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse collapse bg-dark" id="navbarsExample01" style="">

				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
				) );
				?>

				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</ul>

			</div>
		</nav>

		<div class="carousel-inner">
			
			<!-- Ìtems Slider -->
			<div class="carousel-item active slider-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" class="d-block w-100" alt="...">
				
				<div class="carousel-caption d-none d-md-block">
					<div class="p-lg-5 p-md-2 p-sm-0 m-lg-4 m-md-3 m-sm-1"></div>
					<div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
						
						<div class="divider-custom m-0">
							<div class="header-custom-line"></div>
						</div>
							<p class="m-0 text-uppercase font-weight-bold display-3">integro</p>
							<p class="m-0 text-uppercase font-weight-light h3">prueba de wordpress</p>
						<div class="divider-custom mt-3">
							<div class="header-custom-line"></div>
						</div>
					</div>
					<p class="m-lg-5 m-md-3 m-sm-1 font-weight-light">Página de prueba para evidenciar skills en desarrollo.</p>
					<button class="sl-btn text-uppercase">Empieza ahora</button>	
				</div>
			</div>

			<!-- Ìtems Slider -->
			<div class="carousel-item slider-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" class="d-block w-100" alt="...">
				
				<div class="carousel-caption d-none d-md-block">
					<div class="p-lg-5 p-md-2 p-sm-0 m-lg-4 m-md-3 m-sm-1"></div>
					<div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
						
						<div class="divider-custom m-0">
							<div class="header-custom-line"></div>
						</div>
							<p class="m-0 text-uppercase font-weight-bold display-3">integro</p>
							<p class="m-0 text-uppercase font-weight-light h3">prueba de wordpress</p>
						<div class="divider-custom mt-3">
							<div class="header-custom-line"></div>
						</div>
					</div>
					<p class="m-lg-5 m-md-3 m-sm-1 font-weight-light">Página de prueba para evidenciar skills en desarrollo.</p>
					<button class="sl-btn text-uppercase">Empieza ahora</button>	
				</div>
			</div>

			<!-- Ìtems Slider -->
			<div class="carousel-item slider-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" class="d-block w-100" alt="...">
				
				<div class="carousel-caption d-none d-md-block">
					<div class="p-lg-5 p-md-2 p-sm-0 m-lg-4 m-md-3 m-sm-1"></div>
					<div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
						
						<div class="divider-custom m-0">
							<div class="header-custom-line"></div>
						</div>
							<p class="m-0 text-uppercase font-weight-bold display-3">integro</p>
							<p class="m-0 text-uppercase font-weight-light h3">prueba de wordpress</p>
						<div class="divider-custom mt-3">
							<div class="header-custom-line"></div>
						</div>
					</div>
					<p class="m-lg-5 m-md-3 m-sm-1 font-weight-light">Página de prueba para evidenciar skills en desarrollo.</p>
					<button class="sl-btn text-uppercase">Empieza ahora</button>	
				</div>
			</div>

		</div>

	</div>
</section>


	<!-- Our services Title-->
	<section class="container-fluid text-center p-5">
		<div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
			<p class="mb-0 mt-3 text-uppercase">Esto es lo que ofrecemos</p>  
			<h1 class="m-2 text-uppercase downy">Nuestros servicios</h1>
			<div class="divider-custom">
				<div class="divider-custom-line mr-3"></div>
				<div class="divider-custom-icon">
				<i class="fas fa-star downy"></i>
				</div>
				<div class="divider-custom-line ml-3"></div>
			</div>
			<p class="mb-3">Un texto de prueba que demuestra lo que somos capaces de hacer.</p>
		</div>
	</section>
	<!-- Our services Tab-->
	<section class="container-fluid text-center p-5 blumine-bg">
		<div class="col-lg-2 col-md-4 col-sm-10 mx-auto">
			  
			<h3 class="m-2 text-uppercase downy">Marketing</h3>
			
		</div>
	</section>




	<!-- About Us -->
	<section class="container-fluid text-center p-5 blumine-bg m-0">
		<div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
			<p class="mb-0 mt-3 text-uppercase text-white">Esto es lo que somos</p>  
			<h1 class="m-2 text-uppercase text-white">Acerca de Nosotros</h1>
			<div class="divider-custom">
				<div class="divider-custom-line mr-3"></div>
				<div class="divider-custom-icon">
				<i class="fas fa-star downy"></i>
				</div>
				<div class="divider-custom-line ml-3"></div>
			</div>
			<p class="mb-3 text-white">Un texto de prueba que demuestra quienes somos nosotros.</p>
		</div>
	</section>

	<!-- Portfolio -->
	<section class="container-fluid text-center p-5 m-0">
		<div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
			<p class="mb-0 mt-3 text-uppercase">Algo de lo que hacemos</p>  
			<h1 class="m-2 text-uppercase downy">Portafolio</h1>
			<div class="divider-custom">
				<div class="divider-custom-line mr-3"></div>
				<div class="divider-custom-icon">
				<i class="fas fa-star downy"></i>
				</div>
				<div class="divider-custom-line ml-3"></div>
			</div>
			<p class="mb-3">Un texto de prueba que muestra algo de lo que hemos hecho.</p>
		</div>
	</section>


<!-- Wordpress Content -->

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
	
<!-- Portfolio -->



	<!-- Contact Us -->
	<section class="container-fluid text-center p-5">
		<div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
			<p class="mb-0 mt-3 text-uppercase">¿Tienes alguna pregunta?</p>  
			<h1 class="m-2 text-uppercase downy">Escríbenos</h1>
			<div class="divider-custom">
				<div class="divider-custom-line mr-3"></div>
				<div class="divider-custom-icon">
				<i class="fas fa-star downy"></i>
				</div>
				<div class="divider-custom-line ml-3"></div>
			</div>
			<p class="mb-3"></p>
		</div>
	</section>


<?php

get_footer();
