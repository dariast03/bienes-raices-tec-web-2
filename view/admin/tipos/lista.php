<?php include 'view/admin/layout/header.php' ?>
<?php
require_once 'model/TipoModel.php';

$typeModel = new TipoModel();

$tipos = $typeModel
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
        <h1 class="recent-Articles">LISTA DE TIPOS</h1> 
        <a class="btn btn-primary" href="<?php echo BASE_URL ?>/admin/tipos/crear">
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
                <?php foreach ($tipos as $tipo): ?>
                <tr>
                    <td class="t-op-nextlvl"><?php echo $tipo['nombre']; ?></td>
                    <td class="t-op-nextlvl"><?php echo $tipo['descripcion']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'view/admin/layout/footer.php' ?>