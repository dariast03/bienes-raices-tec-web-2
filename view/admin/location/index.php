<?php include 'view/admin/layout/header.php' ?>
<?php
require_once 'model/LocationModel.php';

$locationModel = new UbicacionModel();

$ubicaciones = $locationModel
    ->select('ciudad', 'departamento', 'pais', 'latitud', 'longitud')
    ->get();
?>

<style>
.report-body {
    width: 100%;
}
.report-table {
    width: 100%;
}
.report-table th, .report-table td {
    border: 1px solid #ddd;
    padding: 10px; 
    
}

</style>
<div class="report-container">
    <div class="report-header">
        <h1 class="recent-Articles">LISTA DE UBICACIONES</h1>
        <a class="btn btn-primary" href="<?php echo BASE_URL ?>/admin/ubicaciones/form">
            CREAR
        </a>    
    </div>

    <div class="report-body">
        <table class="report-table">
            <thead>
                <tr>
                    <th class="t-op">Ciudad</th>
                    <th class="t-op">Departamento</th>
                    <th class="t-op">País</th>
                    <th class="t-op">Latitud</th>
                    <th class="t-op">Longitud</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ubicaciones as $ubicacion): ?>
                <tr>
                    <td class="t-op-nextlvl"><?php echo $ubicacion['ciudad']; ?></td>
                    <td class="t-op-nextlvl"><?php echo $ubicacion['departamento']; ?></td>
                    <td class="t-op-nextlvl"><?php echo $ubicacion['pais']; ?></td>
                    <td class="t-op-nextlvl"><?php echo $ubicacion['latitud']; ?></td>
                    <td class="t-op-nextlvl"><?php echo $ubicacion['longitud']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'view/admin/layout/footer.php' ?>