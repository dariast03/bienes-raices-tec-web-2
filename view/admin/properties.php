<?php
require_once 'model/PropertyModel.php';

$propertyModel = new PropertyModel();

$properties = $propertyModel
    ->select('propiedad.id', 'propiedad.precio', 'tipo.id', 'tipo.nombre')
    ->join('tipo', 'propiedad.id_tipo = tipo.id')
    ->find('propiedad.id = 1');



$propertyModel2 = new PropertyModel();

echo "<pre>";
var_dump($propertyModel2);
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