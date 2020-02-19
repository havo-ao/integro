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
			<a class="navbar-brand my-0 ml-auto mr-0" href="#">MENU</a>
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
			<p class="mb-0 mt-3 text-uppercase raleway-title spacing text-secondary">Esto es lo que ofrecemos</p>  
			<h1 class="m-2 text-uppercase downy raleway-title font-weight-bold">Nuestros servicios</h1>
			<div class="divider-custom">
				<div class="divider-custom-line mr-3"></div>
				<div class="divider-custom-icon">
				<i class="fas fa-star downy"></i>
				</div>
				<div class="divider-custom-line ml-3"></div>
			</div>
			<p class="mb-3 text-center sans-text">Un texto de prueba que demuestra lo que somos capaces de hacer.</p>
		</div>
	</section>
	<!-- Our services Tab-->
	
		<section class="container-fluid text-center pb-0 p-5 blumine-bg div-bg">
			<div class="row col-lg-10 col-md-10 col-sm-12 mx-auto">
				<ul class="nav container-fluid p-0 my-4">
					<li class="active mx-auto">
						<a data-toggle="tab" href="#m1">
							<i class="fa fa-code-fork display-3 text-white" aria-hidden="true"></i>
							<h4 class="mt-4 text-white raleway-title">Marketing</h3>
						</a>
					</li>
					<li class="mx-auto">
						<a data-toggle="tab" href="#m2">
							<i class="fa fa-rocket display-3 text-white" aria-hidden="true"></i>
							<h4 class="mt-4 text-white raleway-title">Publicidad</h3>
						</a>
					</li>
					<li class="mx-auto">
						<a data-toggle="tab" href="#m3">
							<i class="fa fa-cloud display-3 text-white" aria-hidden="true"></i>
							<h4 class="mt-4 text-white raleway-title">Nube</h3>
						</a>
					</li>
					<li class="mx-auto">
						<a data-toggle="tab" href="#m4">
							<i class="fa fa-users display-3 text-white" aria-hidden="true"></i>
							<h4 class="mt-4 text-white raleway-title">Consultoría</h3>
						</a>
					</li>
				</ul>
			</div>
		</section>
		
		<div class="tab-content">
			<div id="m1" class="tab-pane in active">
				<section class="container-fluid p-5">
					<div class="col-lg-9 col-md-10 col-sm-12 mx-auto mt-3">
						
						<h4 class="m-2 raleway-title blumine">
							Marketing
							<i class="fa fa-code-fork" aria-hidden="true"></i>
						</h4>
						<hr>
						<p class="sans-text">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque dolorum enim, ab explicabo vel dignissimos veritatis nulla quia provident vero nobis earum molestiae aliquam vitae dolorem consectetur adipisci facilis rem corporis repudiandae sit quasi cupiditate. Quasi, odio fugit doloremque eaque sint excepturi ipsum quidem exercitationem nobis aspernatur accusamus soluta.
						</p>


						<div id="mrcont" class="collapse">
						<p class="sans-text">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, placeat? Debitis id voluptas veritatis at alias, quo quas itaque recusandae velit eum quasi amet possimus non cupiditate dolore quos consequatur doloribus? Error dicta cumque repellendus repudiandae veniam. Dolor, est dolore nesciunt a harum tenetur quasi recusandae quas accusamus minima. Fuga eius ratione molestias quibusdam animi incidunt ex iusto, consequuntur architecto laborum nulla quasi nam tempore eos eligendi optio quia nisi dolorum deserunt reprehenderit minima doloremque vero? Odit quod nesciunt laborum doloribus illo voluptatibus odio cumque consequatur. Natus praesentium iste iusto voluptates dignissimos eum hic aliquid architecto quisquam dolorum, vel nulla placeat quaerat magni. Laborum tempore optio mollitia reprehenderit. Corporis eaque ea facere cum eius assumenda, molestias vitae doloremque dolorem excepturi natus. Enim quos dolore, laborum amet dolorem quam ea repellendus nostrum modi, mollitia, sequi perspiciatis cumque harum. Inventore quo odit sunt voluptate assumenda? Delectus ratione eveniet labore explicabo vitae nemo quaerat debitis officiis reiciendis consequatur adipisci deleniti quae, consectetur, repudiandae nostrum veniam aspernatur accusantium ut quibusdam blanditiis veritatis esse. Nulla, consectetur, quae vero minima rerum magnam laborum eveniet delectus excepturi eos facilis deleniti perspiciatis culpa. Dolore alias optio magnam dolores in porro consectetur quis, vitae, officia et quos reprehenderit voluptatem.
						</p>
						</div>
						
						<div class="text-center m-3 pt-5">
						<a class="fas fa-chevron-circle-down h1 blumine" data-toggle="collapse" href="#mrcont"  ></a>
						</div>
						
					</div>
				</section>
			</div>
			<div id="m2" class="tab-pane fade">
				<section class="container-fluid p-5">
						<div class="col-lg-9 col-md-10 col-sm-12 mx-auto mt-3">
							
							<h4 class="m-2 raleway-title blumine">
								Publicidad
								<i class="fa fa-rocket" aria-hidden="true"></i>
							</h4>
							<hr>
							<p class="sans-text">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque dolorum enim, ab explicabo vel dignissimos veritatis nulla quia provident vero nobis earum molestiae aliquam vitae dolorem consectetur adipisci facilis rem corporis repudiandae sit quasi cupiditate. Quasi, odio fugit doloremque eaque sint excepturi ipsum quidem exercitationem nobis aspernatur accusamus soluta.
							</p>


							<div id="mrcont" class="collapse">
							<p class="sans-text">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, placeat? Debitis id voluptas veritatis at alias, quo quas itaque recusandae velit eum quasi amet possimus non cupiditate dolore quos consequatur doloribus? Error dicta cumque repellendus repudiandae veniam. Dolor, est dolore nesciunt a harum tenetur quasi recusandae quas accusamus minima. Fuga eius ratione molestias quibusdam animi incidunt ex iusto, consequuntur architecto laborum nulla quasi nam tempore eos eligendi optio quia nisi dolorum deserunt reprehenderit minima doloremque vero? Odit quod nesciunt laborum doloribus illo voluptatibus odio cumque consequatur. Natus praesentium iste iusto voluptates dignissimos eum hic aliquid architecto quisquam dolorum, vel nulla placeat quaerat magni. Laborum tempore optio mollitia reprehenderit. Corporis eaque ea facere cum eius assumenda, molestias vitae doloremque dolorem excepturi natus. Enim quos dolore, laborum amet dolorem quam ea repellendus nostrum modi, mollitia, sequi perspiciatis cumque harum. Inventore quo odit sunt voluptate assumenda? Delectus ratione eveniet labore explicabo vitae nemo quaerat debitis officiis reiciendis consequatur adipisci deleniti quae, consectetur, repudiandae nostrum veniam aspernatur accusantium ut quibusdam blanditiis veritatis esse. Nulla, consectetur, quae vero minima rerum magnam laborum eveniet delectus excepturi eos facilis deleniti perspiciatis culpa. Dolore alias optio magnam dolores in porro consectetur quis, vitae, officia et quos reprehenderit voluptatem.
							</p>
							</div>
							
							<div class="text-center m-3 pt-5">
							<a data-toggle="collapse" href="#mrcont" class="fas fa-chevron-circle-down h1 blumine" ></a>
							</div>
							
						</div>
					</section>
				</div>
			<div id="m3" class="tab-pane fade">
				<section class="container-fluid p-5">
						<div class="col-lg-9 col-md-10 col-sm-12 mx-auto mt-3">
							
							<h4 class="m-2 raleway-title blumine">
								Nube
								<i class="fa fa-cloud" aria-hidden="true"></i>
							</h4>
							<hr>
							<p class="sans-text">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque dolorum enim, ab explicabo vel dignissimos veritatis nulla quia provident vero nobis earum molestiae aliquam vitae dolorem consectetur adipisci facilis rem corporis repudiandae sit quasi cupiditate. Quasi, odio fugit doloremque eaque sint excepturi ipsum quidem exercitationem nobis aspernatur accusamus soluta.
							</p>


							<div id="mrcont" class="collapse">
							<p class="sans-text">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, placeat? Debitis id voluptas veritatis at alias, quo quas itaque recusandae velit eum quasi amet possimus non cupiditate dolore quos consequatur doloribus? Error dicta cumque repellendus repudiandae veniam. Dolor, est dolore nesciunt a harum tenetur quasi recusandae quas accusamus minima. Fuga eius ratione molestias quibusdam animi incidunt ex iusto, consequuntur architecto laborum nulla quasi nam tempore eos eligendi optio quia nisi dolorum deserunt reprehenderit minima doloremque vero? Odit quod nesciunt laborum doloribus illo voluptatibus odio cumque consequatur. Natus praesentium iste iusto voluptates dignissimos eum hic aliquid architecto quisquam dolorum, vel nulla placeat quaerat magni. Laborum tempore optio mollitia reprehenderit. Corporis eaque ea facere cum eius assumenda, molestias vitae doloremque dolorem excepturi natus. Enim quos dolore, laborum amet dolorem quam ea repellendus nostrum modi, mollitia, sequi perspiciatis cumque harum. Inventore quo odit sunt voluptate assumenda? Delectus ratione eveniet labore explicabo vitae nemo quaerat debitis officiis reiciendis consequatur adipisci deleniti quae, consectetur, repudiandae nostrum veniam aspernatur accusantium ut quibusdam blanditiis veritatis esse. Nulla, consectetur, quae vero minima rerum magnam laborum eveniet delectus excepturi eos facilis deleniti perspiciatis culpa. Dolore alias optio magnam dolores in porro consectetur quis, vitae, officia et quos reprehenderit voluptatem.
							</p>
							</div>
							
							<div class="text-center m-3 pt-5">
							<a data-toggle="collapse" href="#mrcont" class="fas fa-chevron-circle-down h1 blumine" ></a>
							</div>
							
						</div>
					</section>
				</div>
			<div id="m4" class="tab-pane fade">
				<section class="container-fluid p-5">
						<div class="col-lg-9 col-md-10 col-sm-12 mx-auto mt-3">
							
							<h4 class="m-2 raleway-title blumine">
								Consultoría
								<i class="fa fa-users" aria-hidden="true"></i>
							</h4>
							<hr>
							<p class="sans-text">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque dolorum enim, ab explicabo vel dignissimos veritatis nulla quia provident vero nobis earum molestiae aliquam vitae dolorem consectetur adipisci facilis rem corporis repudiandae sit quasi cupiditate. Quasi, odio fugit doloremque eaque sint excepturi ipsum quidem exercitationem nobis aspernatur accusamus soluta.
							</p>


							<div id="mrcont" class="collapse">
							<p class="sans-text">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, placeat? Debitis id voluptas veritatis at alias, quo quas itaque recusandae velit eum quasi amet possimus non cupiditate dolore quos consequatur doloribus? Error dicta cumque repellendus repudiandae veniam. Dolor, est dolore nesciunt a harum tenetur quasi recusandae quas accusamus minima. Fuga eius ratione molestias quibusdam animi incidunt ex iusto, consequuntur architecto laborum nulla quasi nam tempore eos eligendi optio quia nisi dolorum deserunt reprehenderit minima doloremque vero? Odit quod nesciunt laborum doloribus illo voluptatibus odio cumque consequatur. Natus praesentium iste iusto voluptates dignissimos eum hic aliquid architecto quisquam dolorum, vel nulla placeat quaerat magni. Laborum tempore optio mollitia reprehenderit. Corporis eaque ea facere cum eius assumenda, molestias vitae doloremque dolorem excepturi natus. Enim quos dolore, laborum amet dolorem quam ea repellendus nostrum modi, mollitia, sequi perspiciatis cumque harum. Inventore quo odit sunt voluptate assumenda? Delectus ratione eveniet labore explicabo vitae nemo quaerat debitis officiis reiciendis consequatur adipisci deleniti quae, consectetur, repudiandae nostrum veniam aspernatur accusantium ut quibusdam blanditiis veritatis esse. Nulla, consectetur, quae vero minima rerum magnam laborum eveniet delectus excepturi eos facilis deleniti perspiciatis culpa. Dolore alias optio magnam dolores in porro consectetur quis, vitae, officia et quos reprehenderit voluptatem.
							</p>
							</div>
							
							<div class="text-center m-3 pt-5">
							<a data-toggle="collapse" href="#mrcont" class="fas fa-chevron-circle-down h1 blumine" ></a>
							</div>
							
						</div>
					</section>
				</div>
		</div>

	<!-- About Us -->
	<section class="container-fluid text-center p-5 blumine-bg m-0">
		<div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
			<p class="mb-0 mt-3 text-uppercase text-white spacing">Esto es lo que somos</p>  
			<h1 class="m-2 text-uppercase text-white raleway-title font-weight-bold">Acerca de Nosotros</h1>
			<div class="divider-custom">
				<div class="divider-custom-line mr-3"></div>
				<div class="divider-custom-icon">
				<i class="fas fa-star downy"></i>
				</div>
				<div class="divider-custom-line ml-3"></div>
			</div>
			<p class="mb-3 text-white text-center sans-text">Un texto de prueba que demuestra quienes somos nosotros.</p>
		</div>
		<div class="col-lg-8 col-md-10 col-sm-12 mx-auto my-5">
			<div class="timeline text-white">
                <div class="tm-left">
                    <div class="tm-left-icon">
                        <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M640 256h512v-128h-512v128zm1152 640v480q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-480h672v160q0 26 19 45t45 19h320q26 0 45-19t19-45v-160h672zm-768 0v128h-256v-128h256zm768-480v384h-1792v-384q0-66 47-113t113-47h352v-160q0-40 28-68t68-28h576q40 0 68 28t28 68v160h352q66 0 113 47t47 113z"></path></svg>
                    </div>
                    <span class="tm-left-t">feb 2020</span>
                    <span class="tm-left-m">"desarrollo de prueba"</span>
                </div>
                <div class="tm-sb">
                    <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19l-531-531-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg>
                    <div class="tm-line"></div>
                    <div class="tm-sb-icon">
                        <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1664 896q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path></svg>
                    </div>
                </div>
                <div class="tm-des">
                    <span >Realización de maquetado, orden y programación de estructura</span>
                    <div class="line"></div>
                    <p class="sans-text text-white">Duis lacinia dignissim nisl in volutpat. Etiam euismod, lacus et convallis auctor, urna mauris consectetur nisl, vel convallis nisi sem bibendum quam. Quisque justo elit, dapibus non pretium pretium, posuere quis mi. Nulla tincidunt molestie tellus. Praesent euismod imperdiet vulputate. Suspendisse interdum pulvinar fringilla. Donec vehicula nibh at rhoncus ornare. Nunc malesuada est ac ultrices pulvinar. Aliquam nec lobortis justo.</p>               
                    <p class="sans-text text-white">Donec in ipsum rhoncus, tristique sem eu, vehicula metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus condimentum dignissim tempus. Aliquam erat volutpat. Fusce egestas placerat ultricies. Nulla id nisl venenatis, bibendum augue id, scelerisque elit. Integer at felis sit amet felis facilisis efficitur. Phasellus sodales, ligula eget finibus facilisis, quam tortor tincidunt justo, sit amet ullamcorper lacus metus eu ligula. Nunc eget accumsan diam. Nulla nec tempor lectus, eget iaculis felis.</p>
                </div>
            </div>
		</div>
	</section>






	<section class="container-fluid text-center p-5 m-0">
		<div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
			<p class="mb-0 mt-3 text-uppercase spacing">Algo de lo que hacemos</p>  
			<h1 class="m-2 text-uppercase downy raleway-title font-weight-bold">Portafolio</h1>
			<div class="divider-custom">
				<div class="divider-custom-line mr-3"></div>
				<div class="divider-custom-icon">
				<i class="fas fa-star downy"></i>
				</div>
				<div class="divider-custom-line ml-3"></div>
			</div>
			<p class="mb-3 text-center sans-text">Un texto de prueba que muestra algo de lo que hemos hecho.</p>
		</div>
		<div id="demo"></div>
	</section>


	


	<!-- Contact Us -->
	<section class="container-fluid text-center p-5">
		<div class="col-lg-10 col-md-10 col-sm-12 mx-auto">
			<p class="mb-0 mt-3 text-uppercase spacing">¿Tienes alguna pregunta?</p>  
			<h1 class="m-2 text-uppercase downy raleway-title font-weight-bold">Escríbenos</h1>
			<div class="divider-custom">
				<div class="divider-custom-line mr-3"></div>
				<div class="divider-custom-icon">
				<i class="fas fa-star downy"></i>
				</div>
				<div class="divider-custom-line ml-3"></div>
			</div>
			<p class="mb-3 text-center sans-text"></p>

			<div class="col-lg-4 mx-auto float-left">
				<i class="fa fa-map-marker pm-icon-btn" style="color:#044437; margin-top:30px; margin-bottom:20px; font-size:16px !important; width:45px; height:45px; padding:12px; border:3px solid#044437;border-radius: 50%"></i>
				
				<p class="sans-text text-center">Cll 4 sur # 43A 30 - Piso 10 Edificio Formacol</p>
			</div>
			<div class="col-lg-4 mx-auto float-left">	
				<i class="fa fa-phone pm-icon-btn" style="color:#044437; margin-top:30px; margin-bottom:20px; font-size:16px !important; width:45px; height:45px; padding:12px; border:3px solid#044437;border-radius: 50%"></i>

				<p class="sans-text text-center">+57 (4) 3266912</p>
			</div>	
			<div class="col-lg-4 mx-auto float-left">	
				<i class="fa fa-envelope pm-icon-btn" style="color:#044437; margin-top:30px; margin-bottom:20px; font-size:16px !important; width:45px; height:45px; padding:12px; border:3px solid#044437;border-radius: 50%"></i>

				<p class="sans-text text-center">info@integ.ro</p>
			</div>	

		</div>

		

	</section>

				
			<iframe class="container-fluid p-0 mt-3 mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.476297629023!2d-75.57535821547312!3d6.200722191037003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46828759733bc3%3A0x914f89786874d943!2sEdificio%20Formacol!5e0!3m2!1ses-419!2sco!4v1582210474839!5m2!1ses-419!2sco" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	


<?php

get_footer();
