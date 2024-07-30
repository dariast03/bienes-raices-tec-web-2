<?php

require_once 'model/PropertyModel.php';
require_once 'model/LocationModel.php';
require_once 'model/ImageModel.php';
require_once 'model/CharacteristicPropertyModel.php';

$id = $_GET['id'] ?? null;

if (!$id) {
	header('Location: ' . BASE_URL);
}

$consultaModel = new PropertyModel();
$locationModel = new UbicacionModel();
$imageModel = new ImagenModel();
$propiedadCaracteristicaModel = new PropiedadCaracteristicaModel();


$property = $consultaModel->find($id);

if (!$property) {
	header('Location: ' . BASE_URL);
}

$location = $locationModel->find($property['id_ubicacion']);

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

$hasImage = !empty($images);

if (isset($_POST['submit'])) {
    $error = [];
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
	$gmail = isset($_POST['gmail']) ? $_POST['gmail'] : "";
	$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "";

    if (strlen($nombre) <= 0) {
        $error[0]="<font color='#FF0000'> Nombre es requerido";
    }
    elseif (strlen($nombre) <= 3 || strlen($nombre) >= 20) {
        $error[0]="<font color='#FF0000'>El nombre tiene que tener mínimo 3 letras y máximo 20 letras. </font>"."<br>";  
    }
    if (strlen($apellido) <= 0) {
        $error[1]="<font color='#FF0000'> Apellido es requerido";
    }
    elseif (strlen($apellido) <= 3 || strlen($apellido) >= 20) {
        $error[1]="<font color='#FF0000'>El apellido tiene que tener mínimo 3 letras y máximo 20 letras. </font>"."<br>";
    }
    if (strlen($telefono) <= 0) {
        $error[2]="<font color='#FF0000'> Telefono es requerido";
    }
    elseif (strlen($telefono) < 8 || strlen($telefono) > 8) {
        $error[2]="<font color='#FF0000'>El telefono tiene que tener 8 digitos. </font>"."<br>";  
    }
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

	<title>Property &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>

<body>

	<?php include('layout/header.php'); ?>


	<div class="hero page-inner overlay" style="background-image: url('<?= BASE_URL ?>/assets/images/hero_bg_3.jpg');">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up"><?php echo htmlspecialchars($property['direccion']); ?></h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="<?php echo BASE_URL ?>/index.php">Inicio</a></li>
							<li class="breadcrumb-item "><a href="<?php echo BASE_URL ?>/properties.php">Propiedades</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page"><?php echo htmlspecialchars($property['direccion']); ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7">
					<div class="img-property-slide-wrap">
						<div class="img-property-slide">
							<?php if ($hasImage) : ?>
								<?php foreach ($images as $image) : ?>
									<img src="data:image/jpeg;base64,<?= base64_encode($image['imagen']) ?>" alt="Image" class="img-fluid">
								<?php endforeach; ?>
							<?php else : ?>
								<img src="<?= BASE_URL ?>/assets/images/casad.jpg" alt="Image" class="img-fluid">
							<?php endif; ?>

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
								<li><?php echo htmlspecialchars($caracteristica['nombre'] . ': ' . $caracteristica['descripcion']); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row"></div>
				<div class="row mb-5 align-items-center">
					<div class="col-lg-6 text-center mx-auto">
						<h2 class="font-weight-bold text-primary heading">Agenda tu Cita</h2>
					</div>
				</div>
				<form action="#">
					<div class="row">
						<div class="col-6 mb-3">
							<input type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre">
						</div>
						<div class="col-6 mb-3">
							<input type="email" name="gmail" class="form-control" placeholder="Escribe tu gmail">
						</div>
						<div class="col-12 mb-3">
							<input type="text" name="telefono" class="form-control" placeholder="Escribe tu numero telefonico">
						</div>
						<div class="col-12 mb-3">
							<textarea name="mensaje" id="" cols="30" rows="7" class="form-control" placeholder="Escribe tu mensaje"></textarea>
						</div>

						<div class="col-12">
							<input type="submit" value="Enviar mensaje" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include('layout/footer.php'); ?>
</body>

</html>