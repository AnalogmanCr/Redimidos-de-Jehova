<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
        <li id="item" class="nav-item"><a class="nav-link" href="quiensomos.php">¿Quienes Somos?</a></li>
        <li class="nav-item"><a class="nav-link" href="serviciosonline.php">Servicios Online</a></li>
        <li class="nav-item"><a class="nav-link" href="potcast.php">Podcast</a></li>
        <li class="nav-item"><a class="nav-link" href="galeria.php">Galería</a></li>
        <li class="nav-item"><a class="nav-link" href="reflex.php">Reflexiones</a></li>
        <li class="nav-item"><a class="nav-link" href="noticias.php">Noticias</a></li>
        <li class="nav-item"><a class="nav-link" href="contacto.php">Contáctanos</a></li>

        <style>
            .dropdown-item {
                margin-right: -10px;
            }

            .dropdown-item:hover {
                color: red;
            }
        </style>
        <?php
        if (isset($_SESSION['usuario'])) {
            if ($_SESSION['rol'] == 'ADMINISTRADOR') {
                echo ("<li class='nav-item dropdown'>
                    <a class='nav-link' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    Administrar
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <a class='dropdown-item' href='#'>Registrar Usuarios</a>
                    <a class='dropdown-item' href='#'>Datos de Usuarios</a>
                    </div>
                    </li>");
            }
        }
        ?>
    </ul>
</div>