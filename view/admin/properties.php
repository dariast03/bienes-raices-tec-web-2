<?php
require_once 'model/PropertyModel.php';

$propertyModel = new PropertyModel();

$properties = $propertyModel
    ->select('id', 'precio', 'tipo.nombre')
    ->join('tipo', 'propiedad.id_tipo = tipo.id')
    ->where('propiedad.id', 1)
    ->get();

echo "<pre>";
var_dump($properties);
echo "</pre>";
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