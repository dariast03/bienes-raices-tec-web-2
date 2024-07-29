<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php

require_once 'model/PropertyModel.php';
require_once 'model/LocationModel.php';
require_once 'model/ImageModel.php';
require_once 'model/CharacteristicPropertyModel.php';

// Verificar si se ha proporcionado el ID de la propiedad codificado
if (!isset($_GET['id'])) {
	die('ID de propiedad no especificado.');
}

// Decodificar el ID de la propiedad
$id = $_GET['id'];

if ($id === false) {
	die('ID de propiedad no válido.');
}

// Instanciar los modelos necesarios
$propertyModel = new PropertyModel();
$locationModel = new UbicacionModel();
$imageModel = new ImagenModel();
$propiedadCaracteristicaModel = new PropiedadCaracteristicaModel();

// Obtener los detalles de la propiedad
$property = $propertyModel->find($id);

if (!$property) {
	die('Propiedad no encontrada.');
}


// Obtener la ubicación de la propiedad
$location = $locationModel->find($property['id_ubicacion']);


// Obtener las imágenes de la propiedad
$images = $imageModel->where('id_propiedad', $property['id'])->get();
$propiedadCaracteristicas = $propiedadCaracteristicaModel
	->select('caracteristica.nombre', 'caracteristica.descripcion', 'caracteristica.id')
	->join('caracteristica', 'caracteristica.id = propiedad_caracteristica.id_caracteristica')
	->where('id_propiedad', $property['id'])
	->get();

$caracteristicas = [];
foreach ($propiedadCaracteristicas as $caracteristica) {
	$caracteristicas[] = $caracteristica['caracteristica'];
}


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
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/tiny-slider.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/aos.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/style.css">

	<title>Property &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
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
					<a href="index.php" class="logo m-0 float-start">Bienes y Raices</a>

					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li><a href="index.php">Inicio</a></li>
						<li class="active">
							<a href="properties.php">Propiedades</a>

						</li>
						<li><a href="services.php">Servicios</a></li>
						<li><a href="about.php">Nosotros</a></li>
						<li class="active"><a href="contact.php">Contactanos</a></li>
					</ul>

					<a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>

				</div>
			</div>
		</div>
	</nav>


	<div class="hero page-inner overlay" style="background-image: url('<?php echo BASE_URL ?>/assets/images/hero_bg_3.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">5232 California AVE. 21BC</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="index.php">Home</a></li>
							<li class="breadcrumb-item "><a href="properties.html">Properties</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">5232 California AVE. 21BC</li>
						</ol>
					</nav>


				</div>
			</div>


		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="property-slider-wrap">
						<div class="property-slider">
							<?php foreach ($images as $image) : ?>
								<div class="property-slide">
									<img src="data:image/jpeg;base64,<?php echo base64_encode($image['imagen']); ?>" alt="Image" class="img-fluid">
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<h2 class="heading text-primary"><?php echo htmlspecialchars($property['direccion']); ?></h2>
					<div class="price mb-4"><span>$<?php echo number_format($property['precio']); ?></span></div>
					<div class="specs d-flex mb-4">
						<span class="d-block d-flex align-items-center me-3">
							<span class="icon-bed me-2"></span>
							<span class="caption"><?php echo htmlspecialchars($property['num_habitaciones']); ?> camas</span>
						</span>
						<span class="d-block d-flex align-items-center">
							<span class="icon-bath me-2"></span>
							<span class="caption"><?php echo htmlspecialchars($property['num_baños']); ?> baños</span>
						</span>
					</div>
					<div class="location mb-4">
						<span class="d-block mb-2">Ubicación:</span>
						<span><?php echo htmlspecialchars($location['ciudad'] . ', ' . $location['departamento'] . ', ' . $location['pais']); ?></span>
					</div>
					<div class="description mb-4">
						<p><?php echo htmlspecialchars($property['descripcion']); ?></p>
					</div>
					<div class="features mb-4">
						<h3 class="heading text-primary">Características</h3>
						<ul class="list-unstyled">
							<?php foreach ($caracteristicas as $caracteristica) : ?>
								<li><?php echo htmlspecialchars($caracteristica['nombre'] . ': ' . $caracteristica['valor']); ?></li>
							<?php endforeach; ?>
						</ul>
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
						<h3>Contact</h3>
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
						<h3>Sources</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Partners</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Creative</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Links</h3>
						<ul class="list-unstyled links">
							<li><a href="#">Our Vision</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact us</a></li>
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

					<p>Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> <!-- License information: https://untree.co/license/ -->
					</p>

				</div>
			</div>
		</div> <!-- /.container -->
	</div> <!-- /.site-footer -->


	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
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