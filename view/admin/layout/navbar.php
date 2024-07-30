<div class="navcontainer">
    <nav class="nav">
        <div class="nav-upper-options">

            <a href="<?php echo BASE_URL ?>/admin" class="nav-option option1">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png" class="nav-img" alt="dashboard">
                <h3>Inicio</h3>
            </a>


            <a href="<?php echo BASE_URL ?>/admin/propiedades.php" class="nav-option option2">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png" class="nav-img" alt="properties">
                <h3>Propiedades</h3>
            </a>

            <!-- CONSULTAS -->

            <a href="<?php echo BASE_URL ?>/admin/consultas.php" class="nav-option
            <?php echo $active == 'consultas' ? 'active' : '' ?>">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png" class="nav-img" alt="consultas">
                <h3>Consultas</h3>
            </a>


            <a href="<?php echo BASE_URL ?>/admin/tipos.php" class="nav-option option3">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="types">
                <h3>Tipos</h3>
            </a>


            <a href="<?php echo BASE_URL ?>/admin/ubicaciones.php" class="nav-option option4">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png" class="nav-img" alt="locations">
                <h3>Ubicaciones</h3>
            </a>


            <a href="<?php echo BASE_URL ?>/admin/usuarios.php" class="nav-option option5">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img" alt="users">
                <h3>Usuarios</h3>
            </a>


            <a href="<?php echo BASE_URL ?>/admin/caracteristicas.php" class="nav-option option6">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png" class="nav-img" alt="characteristics">
                <h3>Características</h3>
            </a>


            <a href="<?php echo BASE_URL ?>" class="nav-option logout">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png" class="nav-img" alt="logout">
                <h3>Salir</h3>
            </a>

        </div>
    </nav>
</div>