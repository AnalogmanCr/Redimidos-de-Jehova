<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>  
        <li id= "item" class="nav-item"><a class="nav-link" href="quiensomos.html">¿Quienes Somos?</a></li>
        <li class="nav-item"><a class="nav-link" href="serviciosonline.html">Servicios Online</a></li>
        <li class="nav-item"><a class="nav-link" href="potcast.html">Podcast</a></li>
        <li class="nav-item"><a class="nav-link" href="galeria.html">Galería</a></li>
        <li class="nav-item"><a class="nav-link" href="reflex.html">Reflexiones</a></li>
        <li class="nav-item"><a class="nav-link" href="noticias.html">Noticias</a></li>
        <li class="nav-item"><a class="nav-link" href="contacto.html">Contáctanos</a></li>
        
        <style>
            .dropdown-item{
                margin-right: -10px;
            }
            .dropdown-item:hover{
                color: red;
            }
        </style>
        <?php
            if(isset($_SESSION['usuario'])){
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
        ?>
         </div>
    </ul>
</div>