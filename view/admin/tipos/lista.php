<?php
require_once 'model/TipoModel.php';

$tipoModel = new TipoModel();

$data = $tipoModel->get();


/* $tipoModel->create([
    'nombre' => 'Casa2',
    'descripcion' => 'Casa de 4 pisos'
]); */

debug($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


</body>

</html>

<?php include 'view/admin/layout/header.php' ?>

LISTA DE TIPOS

<a class="btn btn-primary" href="<?php echo BASE_URL ?>/admin/tipos/crear">
    CREAR
</a>

<?php include 'view/admin/layout/footer.php' ?>