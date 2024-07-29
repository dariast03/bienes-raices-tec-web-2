<?php
include 'view/admin/layout/header.php';
require_once 'model/PropertyModel.php';

$propertyModel  = new PropertyModel();
$propiedades = $propertyModel->get();
?>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>LISTA DE PROPIEDADES</h1>
            <a class="btn btn-primary" href="<?php echo BASE_URL ?>/admin/propiedades/form">
                CREAR
            </a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Superficie </th>
                        <th scope="col">Nº Hab.</th>
                        <th scope="col">Estado</th>>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($propiedades as $propiedad) : ?>
                        <tr>
                            <th scope="row"><?php echo $propiedad['id'] ?></th>
                            <td><?php echo $propiedad['direccion'] ?></td>
                            <td><?php echo number_format($propiedad['precio']) ?></td>
                            <td><?php echo $propiedad['superficie_total'] ?></td>
                            <td><?php echo $propiedad['num_habitaciones'] ?></td>
                            <td><?php echo $propiedad['estado'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'view/admin/layout/footer.php' ?>