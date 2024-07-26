<?php

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/tiny-slider.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/aos.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/style.css">

	<title>Bienes Raices UPDS &mdash;</title>
</head>

<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<a href="index.php" class="logo m-0 float-start">Bienes Raices</a>

					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li class="active"><a href="index.php">Inicio</a></li>
						<li class="has-children">
							<a href="properties.html">Propiedades</a>
							<ul class="dropdown">
								<li><a href="#">Comprar propiedad</a></li>
								<li><a href="#">Vender propiedad</a></li>
								<li class="has-children">
									<a href="#">Desplegable</a>
									<ul class="dropdown">
										<li><a href="#">Sub Menu Uno</a></li>
										<li><a href="#">Sub Menu Dos</a></li>
										<li><a href="#">Sub Menu Tres</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="services.php">Servicios</a></li>
						<li><a href="about.php">Acerca de nosotros</a></li>
						<li><a href="contact.php">Contactanos</a></li>
					</ul>

					<a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>

				</div>
			</div>
		</div>
	</nav>

	<div class="hero">


		<div class="hero-slide">
			<div class="img overlay" style="background-image: url('<?php echo BASE_URL ?>/assets/images/hero_bg_3.jpg')"></div>
			<div class="img overlay" style="background-image: url('<?php echo BASE_URL ?>/assets/images/hero_bg_2.jpg')"></div>
			<div class="img overlay" style="background-image: url('<?php echo BASE_URL ?>/assets/images/hero_bg_1.jpg')"></div>
		</div>

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center">
					<h1 class="heading" data-aos="fade-up">Encuentra la casa de tus sueños</h1>
					<form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
						<input type="text" class="form-control px-4" placeholder="Buscar propiedades">
						<button type="submit" class="btn btn-primary">Buscar</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-6">
					<h2 class="font-weight-bold text-primary heading">Propiedades Populares</h2>
				</div>
				<div class="col-lg-6 text-lg-end">
					<p><a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Todas las
							propiedades</a></p>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="property-slider-wrap">
						<div class="property-slider">
							<div class="property-item">
								<a href="property-single.html" class="img">
									<img src="<?php echo BASE_URL ?>/assets/images/img_1.jpg" alt="Image" class="img-fluid">
								</a>
								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 camas</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baños</span>
											</span>
										</div>
										<a href="property-single.html" class="btn btn-primary py-2 px-3">Ver detalles</a>
									</div>
								</div>
							</div> <!-- .item -->
							<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="<?php echo BASE_URL ?>/assets/images/img_2.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 camas</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baños</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">Ver detalles</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="<?php echo BASE_URL ?>/assets/images/img_3.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 camas</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baños</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">Ver detalles</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="<?php echo BASE_URL ?>/assets/images/img_4.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 camas</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baños</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">Ver detalles</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="<?php echo BASE_URL ?>/assets/images/img_5.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 camas</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baños</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">Ver detalles</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="<?php echo BASE_URL ?>/assets/images/img_6.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 camas</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baños</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">Ver detalles</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="<?php echo BASE_URL ?>/assets/images/img_7.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 camas</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baños</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">Ver detalles</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="<?php echo BASE_URL ?>/assets/images/img_8.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 camas</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baños</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">Ver detalles</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="<?php echo BASE_URL ?>/assets/images/img_1.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 camas</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baños</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">Ver detalles</a>
									</div>
								</div>
							</div> <!-- .item -->


						</div>


						<div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
							<span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
							<span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<section class="features-1">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
					<div class="box-feature">
						<span class="flaticon-house"></span>
						<h3 class="mb-3">Nuestras Propiedades</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
						<p><a href="#" class="learn-more">Saber mas</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
					<div class="box-feature">
						<span class="flaticon-building"></span>
						<h3 class="mb-3">Propiedad en Venta</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
						<p><a href="#" class="learn-more">Saber mas</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
					<div class="box-feature">
						<span class="flaticon-house-3"></span>
						<h3 class="mb-3">Agente Inmobiliario</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
						<p><a href="#" class="learn-more">Saber mas</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
					<div class="box-feature">
						<span class="flaticon-house-1"></span>
						<h3 class="mb-3">Casa en Venta</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
						<p><a href="#" class="learn-more">Saber mas</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>



	<div class="section sec-testimonials">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-md-6">
					<h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">Los Clientes dicen</h2>
				</div>
				<div class="col-md-6 text-md-end">
					<div id="testimonial-nav">
						<span class="prev" data-controls="prev">Anterior</span>

						<span class="next" data-controls="next">Siguiente</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">

				</div>
			</div>
			<div class="testimonial-slider-wrap">
				<div class="testimonial-slider">
					<div class="item">
						<div class="testimonial">
							<img src="<?php echo BASE_URL ?>/assets/images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">James Smith</h3>
							<blockquote>
								<p>&ldquo;Lejos, muy lejos, detrás de la palabra montañas, lejos de los países Vokalia y
									Consonancia, allí viven los textos ciegos. Separados, viven en Bookmarksgrove a la derecha
									en la costa de la Semántica, un gran océano lingüístico.&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Diseñador, Co-fundador</p>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="<?php echo BASE_URL ?>/assets/images/person_2-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">Mike Houston</h3>
							<blockquote>
								<p>&ldquo;Lejos, muy lejos, detrás de la palabra montañas, lejos de los países Vokalia y
									Consonancia, allí viven los textos ciegos. Separados, viven en Bookmarksgrove a la derecha
									en la costa de la Semántica, un gran océano lingüístico.&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Diseñador, Co-fundador</p>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="<?php echo BASE_URL ?>/assets/images/person_3-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">Cameron Webster</h3>
							<blockquote>
								<p>&ldquo;Lejos, muy lejos, detrás de la palabra montañas, lejos de los países Vokalia y
									Consonancia, allí viven los textos ciegos. Separados, viven en Bookmarksgrove a la derecha
									en la costa de la Semántica, un gran océano lingüístico.&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Diseñador, Co-fundador</p>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="<?php echo BASE_URL ?>/assets/images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">Dave Smith</h3>
							<blockquote>
								<p>&ldquo;Lejos, muy lejos, detrás de la palabra montañas, lejos de los países Vokalia y
									Consonancia, allí viven los textos ciegos. Separados, viven en Bookmarksgrove a la derecha
									en la costa de la Semántica, un gran océano lingüístico.&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Diseñador, Co-fundador</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="section section-4 bg-light">
		<div class="container">
			<div class="row justify-content-center  text-center mb-5">
				<div class="col-lg-5">
					<h2 class="font-weight-bold heading text-primary mb-4">Encontremos el hogar perfecto para ti</h2>
					<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim
						pariatur similique debitis vel nisi qui reprehenderit.</p>
				</div>
			</div>
			<div class="row justify-content-between mb-5">
				<div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
					<div class="img-about dots">
						<img src="<?php echo BASE_URL ?>/assets/images/hero_bg_3.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-home2"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">2M de Propiedades</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
								iste.</p>
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-person"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Agentes Mejor Puntuados</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
								iste.</p>
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-security"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Propiedades Legitimas</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
								iste.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row section-counter mt-5">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">3298</span></span>
						<span class="caption text-black-50"># de Propiedades Compradas</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">2181</span></span>
						<span class="caption text-black-50"># de Propiedades Vendidas</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">9316</span></span>
						<span class="caption text-black-50"># de Todas las Propiedades</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">7191</span></span>
						<span class="caption text-black-50"># de Agentes</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="row justify-content-center footer-cta" data-aos="fade-up">
			<div class="col-lg-7 mx-auto text-center">
				<h2 class="mb-4 ">Se parte de nuestro equipo de agentes en crecimiento</h2>
				<p><a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Aplicar como Agente Inmobiliario</a></p>
			</div> <!-- /.col-lg-7 -->
		</div> <!-- /.row -->
	</div>

	<div class="section section-5 bg-light">
		<div class="container">
			<div class="row justify-content-center  text-center mb-5">
				<div class="col-lg-6 mb-5">
					<h2 class="font-weight-bold heading text-primary mb-4">Nuestros Agentes</h2>
					<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim
						pariatur similique debitis vel nisi qui reprehenderit totam? Quod maiores.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="<?php echo BASE_URL ?>/assets/images/person_1-min.jpg" alt="Image" class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">James Doe</a></h2>
							<span class="meta d-block mb-3">Agente Inmobiliario</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque
								tenetur laboriosam, minus culpa doloremque odio, neque molestias?</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="<?php echo BASE_URL ?>/assets/images/person_2-min.jpg" alt="Image" class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">Jean Smith</a></h2>
							<span class="meta d-block mb-3">Agente Inmobiliario</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque
								tenetur laboriosam, minus culpa doloremque odio, neque molestias?</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="<?php echo BASE_URL ?>/assets/images/person_3-min.jpg" alt="Image" class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">Alicia Huston</a></h2>
							<span class="meta d-block mb-3">Agente Inmobiliario</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque
								tenetur laboriosam, minus culpa doloremque odio, neque molestias?</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="site-footer">
		<div class="container">

			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3>Contacto</h3>
						<address>43 Raymouth Rd. Baltemoer, London 3910</address>
						<ul class="list-unstyled links">
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Fuentes</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Sobre Nosotros</a></li>
							<li><a href="#">Servicios</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mision</a></li>
							<li><a href="#">Terminos</a></li>
							<li><a href="#">Privacidad</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Afiliados</a></li>
							<li><a href="#">Negocios</a></li>
							<li><a href="#">Carreras</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Preguntas Frecuentes</a></li>
							<li><a href="#">Creativo</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Links</h3>
						<ul class="list-unstyled links">
							<li><a href="#">Nuestra Vision</a></li>
							<li><a href="#">Sobre Nosotros</a></li>
							<li><a href="#">Contactanos</a></li>
						</ul>

						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
					<!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

					<p>Copyright &copy;
						<script>
							document.write(new Date().getFullYear());
						</script>. Todos los Derechos Reservados. &mdash;
						Diseñado con amor en <a href="https://untree.co">Untree.co</a>
						<!-- License information: https://untree.co/license/ -->
					</p>

				</div>
			</div>
		</div> <!-- /.container -->
	</div> <!-- /.site-footer -->


	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Cargando...</span>
		</div>
	</div>


	<script src="<?php echo BASE_URL ?>/assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo BASE_URL ?>/assets/js/tiny-slider.js"></script>
	<script src="<?php echo BASE_URL ?>/assets/js/aos.js"></script>
	<script src="<?php echo BASE_URL ?>/assets/js/navbar.js"></script>
	<script src="<?php echo BASE_URL ?>/assets/js/counter.js"></script>
	<script src="<?php echo BASE_URL ?>/assets/js/custom.js"></script>
</body>

</html>