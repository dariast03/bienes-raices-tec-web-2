<?php
/* require_once 'model/TipoModel.php';
require_once 'model/LocationModel.php';
require_once 'model/CharacteristicModel.php';
require_once 'model/CharacteristicPropertyModel.php';
require_once 'model/ImageModel.php';
require_once 'model/PropertyModel.php';

$propertyModel = new PropertyModel();
$typeModel = new TipoModel();
$locationModel = new UbicacionModel();
$characteristicModel = new CaracteristicaModel();
$characteristicPropertyModel = new PropiedadCaracteristicaModel();
$imageModel = new ImagenModel();

$propiedades = $propertyModel
	->select('propiedad.id', 'propiedad.direccion', 'tipo.id', 'tipo.nombre', 'ubicacion.id', 'ubicacion.pais')
	->join('tipo', 'tipo.id = propiedad.id_tipo')
	->join('ubicacion', 'ubicacion.id = propiedad.id_ubicacion')
	->get();


foreach ($propiedades as $key => $value) {
	echo $value['direccion'] . '<br>';
	$imagenes = $imageModel
		->where('id_propiedad', $value['id'])
		->get();

	$caracteristicas = $characteristicPropertyModel
		->select('caracteristica.nombre', 'caracteristica.descripcion', 'caracteristica.id')
		->join('caracteristica', 'caracteristica.id = propiedad_caracteristica.id_caracteristica')
		->where('id_propiedad', $value['id'])
		->get();


	foreach ($imagenes as $key => $value) {
		echo "<img src='data:image/jpeg;base64," . base64_encode($value['imagen']) . "' width='100' height='100' />";
	}
}

exit; */

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

	<?php include('layout/header.php'); ?>

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
						<p>Explora nuestra amplia gama de propiedades en venta y descubre las mejores
							oportunidades del mercado.
						</p>
						<p><a href="services.php" class="learn-more">Saber mas</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
					<div class="box-feature">
						<span class="flaticon-building"></span>
						<h3 class="mb-3">Propiedad en Venta</h3>
						<p>Ofrecemos una variada cartera de propiedades en venta, desde acogedores
							apartamentos hasta amplias casas con jardín.
						</p>
						<p><a href="services.php" class="learn-more">Saber mas</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
					<div class="box-feature">
						<span class="flaticon-house-3"></span>
						<h3 class="mb-3">Agente Inmobiliario</h3>
						<p>Con años de experiencia en el sector, nuestros agentes inmobiliarios te
							brindarán un asesoramiento personalizado.
						</p>
						<p><a href="services.php" class="learn-more">Saber mas</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
					<div class="box-feature">
						<span class="flaticon-house-1"></span>
						<h3 class="mb-3">Casa en Venta</h3>
						<p>Disfruta de la comodidad de vivir en una casa espaciosa, ideal
							para compartir momentos inolvidables con tu familia.
						</p>
						<p><a href="services.php" class="learn-more">Saber mas</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<div class="section section-4 bg-light">
		<div class="container">
			<div class="row justify-content-center  text-center mb-5">
				<div class="col-lg-5">
					<h2 class="font-weight-bold heading text-primary mb-4">Encontremos el hogar perfecto para ti</h2>
					<p class="text-black-50"> Disfruta de espacios amplios, acabados de calidad y una ubicación
						privilegiada.</p>
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
							<p class="text-black-50">¡Éxitos en ventas! Hemos superado todas las expectativas
								y seguimos creciendo. Descubre por qué nuestros clientes nos eligen.</p>
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-person"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Agentes Mejor Puntuados</h3>
							<p class="text-black-50">Nuestro equipo de agentes inmobiliarios está comprometido
								en brindarte el mejor servicio y ayudarte a encontrar el hogar de tus sueños.</p>
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-security"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Propiedades Legitimas</h3>
							<p class="text-black-50">Todas nuestras propiedades cuentan con documentación en
								regla, ofreciéndote la tranquilidad que buscas.</p>
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
								<p>&ldquo;La selección de propiedades es impresionante. Encontré una gran variedad de opciones que se ajustaban a mi presupuesto y estilo de vida.
									Las descripciones de las propiedades son muy detalladas y precisas. No tuve que hacer muchas preguntas adicionales.&rdquo;</p>
							</blockquote>

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
								<p>&ldquo;Mi agente inmobiliario fue excepcional. Siempre estuvo disponible para responder a mis preguntas y me guió en todo el proceso de compra.
									Su conocimiento del mercado y su profesionalismo me dieron mucha confianza.&rdquo;</p>
							</blockquote>

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
								<p>&ldquo;Encontré mi hogar ideal gracias La casa está ubicada en un barrio tranquilo y familiar,
									cerca de todos los servicios que necesito. El jardín es perfecto para mis hijos y la cocina es
									muy amplia y luminosa. El proceso de compra fue muy sencillo y mi agente inmobiliario, me guió
									en todo momento. Estoy muy satisfecho con mi nueva casa y recomiendo encarecidamento.&rdquo;</p>
							</blockquote>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<?php include('layout/footer.php'); ?>
</body>

</html>