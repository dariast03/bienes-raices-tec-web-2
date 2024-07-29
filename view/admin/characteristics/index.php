<?php include 'view/admin/layout/header.php' ?>
<?php
require_once 'model/CharacteristicModel.php';

$characteristicModel = new CaracteristicaModel();

$caracteristicas = $characteristicModel
    ->select('nombre', 'descripcion')
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
        <h1 class="recent-Articles">LISTA DE CARACTERISTICAS</h1>
        <a class="btn btn-primary" href="<?php echo BASE_URL ?>/admin/caracteristicas/form">
            CREAR
        </a>
    </div>
    <div class="report-body">
        <table class="report-table">
            <thead>
                <tr>
                    <th class="t-op">Nombre</th>
                    <th class="t-op">Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($caracteristicas as $caracteristica): ?>
                <tr>
                    <td class="t-op-nextlvl"><?php echo $caracteristica['nombre']; ?></td>
                    <td class="t-op-nextlvl"><?php echo $caracteristica['descripcion']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'view/admin/layout/footer.php' ?>