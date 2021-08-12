<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurar Noticias</title>
    <link rel="icon" type="image/png" href="assets/images/icono.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700" rel="stylesheet">
    <!-- Plugins Stylesheets -->
    <link rel="stylesheet" href="assets/css/loader/loaders.css">
    <link rel="stylesheet" href="assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/aos/aos.css">
    <link rel="stylesheet" href="assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("location:index.php");
    }
    ?>
    <!-- Loader Start -->
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
    </div>
    <!-- Loader End -->
    <!-- Header Start -->
    <header class="position-absolute w-100">
        <div class="container">
            <?php
            // Alerta de suscripcion
            if (isset($_GET['suscriptor'])) {
                if ($_GET['suscriptor'] == "ok") {
                    echo ("<div style='position: absolute;' id='alerta'>
                    <div class='alert alert-success d-flex align-items-center' role='alert'>
                        <svg class='flex-shrink-0 bi me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
                        <div>
                            Suscripción realizada!!
                        </div>
                    </div>
                    </div>");
                } else {
                    if ($_GET['suscriptor'] == "registrado") {
                        echo ("<div style='position: absolute;' id='alerta'>
                        <div class='alert alert-primary d-flex align-items-center' role='alert'>
                        <svg class='flex-shrink-0 bi me-2' width='24' height='24' role='img' aria-label='Info:'><use xlink:href='#info-fill'/></svg>
                        <div>
                           Usuario ya está suscribido a la página!!
                        </div>
                      </div>
                        </div>");
                    }
                }
            }
            ?>
            <div class="top-header d-none d-sm-flex justify-content-between align-items-center">
                <div class="contact">
                    <a href="tel:(+506)6440-0310" class="tel"><i class="fa fa-phone" aria-hidden="true"></i>(+506)6440-0310 </a>
                    <a href="mailto:info@redimidosdejehova.org"><i class="fa fa-envelope" aria-hidden="true"></i>info@redimidosdejehova.org</a>
                </div>
                <nav class="d-flex aic">
                    <ul class="nav social d-none d-md-flex">
                        <a href="https://www.facebook.com/IglesiaRedimidos" target="_blank"><img alt="Siguenos en Facebook" src="https://lh6.googleusercontent.com/-CYt37hfDnQ8/T3nNydojf_I/AAAAAAAAAr0/P5OtlZxV4rk/s32/facebook32.png" width=32 height=32 /></a>
                        <a href="https://www.youtube.com/channel/UClYQiicGY6F_ki1tZirYzzQ" target="_blank"><img alt="Siguenos en YouTube" src="https://lh5.googleusercontent.com/-TXzlKCbKzWs/T6mYkDhTXyI/AAAAAAAAA1U/vm95Q2KwrYg/s32/youtube32.png" width=32 height=32 /></a>
                        <a href="https://www.instagram.com/rj_redimidosdejehova/" target="_blank"><img alt="Siguenos en Blogger" src="https://lh5.googleusercontent.com/-vBqtz2iv2BE/UIqE3LQyFMI/AAAAAAAABgA/TJ4W-vIBjsc/s32/instagram32.png" width=32 height=32 /></a>
                        <a href="https://correo.redimidosdejehova.org"><img alt="Servidor de Correo" src="assets/images/correo-electronico.png" width=32 height=32 /></a>
                        <?php
                        if (!isset($_SESSION['usuario'])) {
                            echo "<a href='login.php'><img alt='login' src='assets/images/login.png' width=32 height=32  /></a>";
                        } else {
                            echo "<a href='cerrarSesion.php'><img alt='login' src='assets/images/exit.png' width=32 height=32  /></a>";
                        }
                        ?>
                    </ul>
                </nav>
            </div>
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="rdlogo">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/images/logo.png" style="width: 70px;" alt="IglesiaRedimidos"></a>
                </div>
                <div class="group d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="nav social d-md-flex">
                        <a class="d-sm-none" href="https://correo.redimidosdejehova.org"><img alt="Servidor de Correo" src="assets/images/correo-electronico.png" width=32 height=32 /></a>
                    </ul>
                    <ul class="nav social d-md-flex">
                        <?php
                        if (!isset($_SESSION['usuario'])) {
                            echo "<a class='d-sm-none' href='login.php'><img alt='login' src='assets/images/login.png' width=32 height=32/></a>";
                        } else {
                            echo "<a class='d-sm-none' href='cerrarSesion.php'><img alt='login' src='assets/images/exit.png' width=32 height=32/></a>";
                        }
                        ?>
                    </ul>
                    <style>
                        @media (min-width: 600px) {
                            .usuario {
                                visibility: hidden;
                            }
                        }
                    </style>
                </div>
                <!-- Opciones del menu -->
                <?php
                include("header.php");
                ?>
            </nav>
        </div>
    </header>
    <br><br><br><br><br><br><br><br><br>
    <!-- Contenido Web -->
    <style>
        .btnTabla {
            background: none;
        }

        .btnTabla:hover {
            background-color: red;
        }

        .btnAdd {
            background: none;
            border: none;
        }

        .btnAdd:hover {
            background-color: red;
        }
    </style>
    <?php
    include("CarouselController.php");
    $resultado = new CarrouselDinamico();
    if ($_SESSION['rol'] == "USUARIO") {
        $arrayResultados = $resultado->getDatos($_SESSION['usuario']);
    } elseif ($_SESSION['rol'] == "ADMINISTRADOR") {
        $arrayResultados = $resultado->getDatosFull();
    }

    ?>
    <section id="Tablas" class="Container">
        <h1 style="color:blue; text-align: center">Configuracion de Noticias</h1>
        <br>
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Archivo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($arrayResultados as $registro) :
                    ?>
                        <tr>
                            <th scope="row"><?php echo $registro->ID ?></th>
                            <td><?php echo $registro->DESCRIP_ANUNCIO ?></td>
                            <td><?php echo $registro->TIPO ?></td>
                            <td><?php echo $registro->RUTA ?></td>
                            <td><?php echo $registro->USUARIO ?></td>
                            <td><?php echo $registro->FECHA ?></td>
                            <td>
                                <button class="btnTabla">
                                    <a href="DeleteCarrousel.php?ID=<?php echo $registro->ID ?>&TIPO=<?php echo $registro->TIPO ?>&RUTA=<?php echo $registro->RUTA ?>"><img src="assets/images/remove.png" width="30px" alt="Borrar"></a>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button onClick="document.getElementById('id01').style.display = 'block'" class="btnAdd">
                <img src="assets/images/plus.png" width="30px" alt="Insertar">
            </button>
            <div id="id01" class="w3-modal">
                <br><br><br><br><br>
                <div class="w3-modal-content">
                    <header class="w3-container w3-teal">
                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                        <h2>Nuevo Elemento</h2>
                    </header>
                    <style>
                        .tdTable {
                            text-align: left;
                            width: 40px;
                        }

                        label {

                            text-align: center;
                            margin-top: 6px;
                        }

                        .tdLabel {
                            width: 160px;
                        }

                        .boton-primario {
                            color: white;
                            background-color: teal;
                            width: 150px;
                            height: 40px;
                        }

                        .boton-primario:hover {
                            background-color: #004d4d;
                        }
                    </style>
                    <div class="w3-container">
                        <form action="NuevoCarrousel.php" method="POST" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td class="tdLabel">
                                        Tipo de Elemento:
                                    </td>
                                    <td>
                                        <label for="">Video</label>
                                    </td>
                                    <td class="tdTable">
                                        <input type="radio" name="radioImg" id="radioImg2" value="Video">
                                    </td>
                                    <td>
                                        <label for="">Imagen</label>
                                    </td>
                                    <td class="tdTable">
                                        <input type="radio" name="radioImg" id="radioImg1" value="Imagen" checked>
                                    </td>
                                </tr>
                            </table>
                            <input class="mt-2" type="file" name="file" id="file" accept="image/*">
                            <input class="mt-2" type="text" name="ruta" id="ruta">
                            <label for="descrip">Descripción:</label>
                            <textarea class="mt-2" name="descrip" id="descrip" cols="30" rows="7"></textarea>
                            <button type="submit" class="mt-2 boton-primario">Enviar</button>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <br>
    <!-- Footer -->
    <?php include("footer.php"); ?>
    <!-- Footer Start -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcbeUcaAAAAALbTEMH4a3xVY2USMQHWh4d6zeUJ"></script>
    <script src="funcionesJQUERY.js"></script>
    <!-- form logic -->
    <script src="assets/js/index.js"></script>
    <!-- Footer Endt -->
    <!--jQuery-->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <!--Plugins-->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/loaders.css.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/lightgallery-all.min.js"></script>
    <!--Template Script-->
    <script src="assets/js/main.js"></script>
</body>

</html>