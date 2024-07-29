<?php include 'view/admin/layout/header.php' ?>

<!--
LISTA DE UBICACIONES

<a class="btn btn-primary" href="<?php echo BASE_URL ?>/admin/ubicacion/form">
    CREAR
</a>
-->

<?php
require_once 'model/LocationModel.php'; // Asegúrate de que la ruta sea correcta

$ubicacionModel = new UbicacionModel(); // Crea una instancia del modelo
$ubicaciones = $ubicacionModel->get(); // Obtiene todas las ubicaciones
?>
    <div class="report-header">
        <h1 class="recent-Articles">LISTA DE UBICACIONES</h1>
        <a class="btn btn-primary" href="<?php echo BASE_URL ?>/admin/ubicaciones/form">
            CREAR
        </a>
    </div>
    <div class="report-body">
        <div class="report-topic-heading">
            <h3 class="t-op">Ciudad</h3>
            <h3 class="t-op">Departamento</h3>
            <h3 class="t-op">Pais</h3>
            <h3 class="t-op">Latitud</h3>
            <h3 class="t-op">Longitud</h3>
        </div>
        <?php foreach ($ubicaciones as $ubicacion): ?>
        <div class="items">
            <div class="item1">
                <h3 class="t-op-nextlvl"><?php echo $ubicacion['ciudad']; ?></h3>
                <h3 class="t-op-nextlvl"><?php echo $ubicacion['departamento']; ?></h3>
                <h3 class="t-op-nextlvl"><?php echo $ubicacion['pais']; ?></h3>
                <h3 class="t-op-nextlvl"><?php echo $ubicacion['latitud']; ?></h3>
                <h3 class="t-op-nextlvl"><?php echo $ubicacion['longitud']; ?></h3>
            </div>
        </div>
        <?php endforeach; ?>
</div>
<?php include 'view/admin/layout/footer.php' ?>