<?php
require_once 'core/Model.php';
require_once 'model/PropertyModel.php';
require_once 'model/ImageModel.php';

// Instanciar el modelo de propiedad
$propertyModel = new PropertyModel();
$imageModel = new ImagenModel();

// Obtener todas las propiedades
$properties = $propertyModel->select('id', 'direccion', 'precio', 'num_habitaciones', 'num_baños')->get();

// Agregar imágenes a las propiedades
foreach ($properties as $key => $property) {
	$images = $imageModel->where('id_propiedad', $property['id'])->select('imagen')->get();
	$properties[$key]['imagenes'] = $images;
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
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/tiny-slider.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/aos.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/style.css">
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
					<a href="index.php" class="logo m-0 float-start">Bienes y raices</a>
					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li><a href="index.php">Inicio</a></li>
						<li><a href="services.php">Servicios</a></li>
						<li><a href="about.php">Nosostros</a></li>
						<li><a href="contact.php">Contactanos</a></li>
					</ul>
					<a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="hero page-inner overlay" style="background-image: url('<?php echo BASE_URL ?>/assets/images/hero_bg_1.jpg');">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">Propiedades</h1>
					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="index.php">Inicio</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">Propiedades</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-6 text-center mx-auto">
					<h2 class="font-weight-bold text-primary heading">Escoge que Propiedad deseas</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<?php foreach ($properties as $property) : ?>
						<div class="property-item">
							<!-- Usa la primera imagen de las imágenes asociadas a la propiedad o imagen por defecto -->
							<?php
							$hasImage = !empty($property['imagenes']);
							$image = $hasImage ? $property['imagenes'][0]['imagen'] : 'hero_bg_1.jpg';

							?>

							<a href="property.php?id=<?php echo $property['id']; ?>" class="img">

								<?php if ($hasImage) : ?>
									<img src="data:image/jpeg;base64,<?php echo base64_encode($image) ?>" alt="Image" class="img-fluid">
								<?php else : ?>
									<img src="<?php echo BASE_URL ?>/assets/images/<?php echo $image; ?>" alt="Image" class="img-fluid">
								<?php endif; ?>

							</a>

							<div class="property-content">
								<div class="price mb-2"><span>$<?php echo number_format($property['precio']); ?></span></div>

								<div>
									<span class="d-block mb-2 text-black-50"><?php echo htmlspecialchars($property['direccion']); ?></span>
									<div class="specs d-flex mb-4">
										<span class="d-block d-flex align-items-center me-3">
											<span class="icon-bed me-2"></span>
											<span class="caption"><?php echo htmlspecialchars($property['num_habitaciones']); ?> camas</span>
										</span>
										<span class="d-block d-flex align-items-center">
											<span class="icon-bath me-2"></span>
											<span class="caption"><?php echo $property['num_baños']; ?> baños</span>
										</span>
									</div>
									<a href="property.php?id=<?php echo $property['id']; ?>" class="btn btn-primary py-2 px-3">Ver detalles</a>
								</div>
							</div>
						</div> <!-- .property-item -->
					<?php endforeach; ?>
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