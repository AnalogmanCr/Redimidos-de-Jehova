<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="ti8Lwh-dDghPcYegkElfmWi-p8uh4hrc0GMsVJoQHeY" />
    <!-- Document title -->
    <title>Iglesia Redimidos de Jehová</title>
    <!-- Stylesheets & Fonts -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
        rel="stylesheet">
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
    <link rel="icon" type="image/png" href="assets/images/icono.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="dinamica.css">
    <!-- Iconos para las alerts -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
     <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
     <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>

</head>

<body>
    <?php
        session_start();
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
            if(isset($_GET['suscriptor'])){
                if($_GET['suscriptor']=="ok"){
                    echo("<div style='position: absolute;' id='alerta'>
                    <div class='alert alert-success d-flex align-items-center' role='alert'>
                        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
                        <div>
                            Suscripción realizada!!
                        </div>
                    </div>
                    </div>");
                }
                else
                {
                    if($_GET['suscriptor']=="registrado"){
                        echo("<div style='position: absolute;' id='alerta'>
                        <div class='alert alert-primary d-flex align-items-center' role='alert'>
                        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Info:'><use xlink:href='#info-fill'/></svg>
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
                    <a href="mailto:info@redimidosdejehova.org"><i class="fa fa-envelope"
                            aria-hidden="true"></i>info@redimidosdejehova.org</a>
                </div>
		
                <nav class="d-flex aic">
                    <ul class="nav social d-none d-md-flex">
                        <a href="https://www.facebook.com/IglesiaRedimidos" target="_blank"><img alt="Siguenos en Facebook" src="https://lh6.googleusercontent.com/-CYt37hfDnQ8/T3nNydojf_I/AAAAAAAAAr0/P5OtlZxV4rk/s32/facebook32.png" width=32 height=32  /></a>
                        <a href="https://www.youtube.com/channel/UClYQiicGY6F_ki1tZirYzzQ" target="_blank"><img alt="Siguenos en YouTube" src="https://lh5.googleusercontent.com/-TXzlKCbKzWs/T6mYkDhTXyI/AAAAAAAAA1U/vm95Q2KwrYg/s32/youtube32.png" width=32 height=32  /></a>
                        <a href="https://www.instagram.com/rj_redimidosdejehova/" target="_blank"><img alt="Siguenos en Blogger" src="https://lh5.googleusercontent.com/-vBqtz2iv2BE/UIqE3LQyFMI/AAAAAAAABgA/TJ4W-vIBjsc/s32/instagram32.png" width=32 height=32  /></a>
                        <a href="https://correo.redimidosdejehova.org"><img alt="Servidor de Correo" src="assets/images/correo-electronico.png" width=32 height=32/></a>                        
                        <?php
                            if(!isset($_SESSION['usuario'])){
                                echo "<a href='login.php'><img alt='login' src='assets/images/login.png' width=32 height=32  /></a>";
                            }
                            else
                            {
                                echo "<a href='cerrarSesion.php'><img alt='login' src='assets/images/exit.png' width=32 height=32  /></a>";
                            }
                        ?>

                    </ul>
                </nav>
		
            </div>
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="rdlogo">
                    <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" style= "width: 70px;" alt="IglesiaRedimidos"></a>
                </div>
                <div class="group d-flex align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"><span
                                class="navbar-toggler-icon"></span></button>
                        <ul class="nav social d-md-flex">
                        <a class="d-sm-none" href="https://correo.redimidosdejehova.org"><img alt="Servidor de Correo" src="assets/images/correo-electronico.png" width=32 height=32  /></a>
                         </ul>
                        <ul class="nav social d-md-flex">
                            <a class="d-sm-none" href="login.php"><img alt="login" src="assets/images/login.png" width=32 height=32  /></a>    
                        </ul>
                        <style>
                        @media (min-width: 600px) {
                            .usuario{
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
    <!-- Header End -->
    <!-- Hero Start -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-1 col-md-11">
                    <div class="swiper-container hero-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-content d-flex align-items-center">
                                <div class="single-slide">
                                    <h1 data-aos="fade-right" data-aos-delay="200"><br> Iglesia <br> Redimidos de Jehová
                                    </h1>
                                    <p data-aos="fade-right" data-aos-delay="500">Bajo la unción del Espiritu Santo, Una Iglesia que no se detiene. 
                                    </p>
                                </div>
                                <div class="test-pagination"></div>
                            </div>
                            <div class="swiper-slide slide-content d-flex align-items-center">
                                <div class="single-slide">
                                    <h1 data-aos="fade-right" data-aos-delay="200"> <br> <br> Iglesia<br> Con propósito
                                    </h1>
                                    <p data-aos="fade-right" data-aos-delay="500">Ganando a todos para Cristo Jesús <br> Enseñandoles el evangelio de Jesús y enviarlos bajo la <br>  cobertura del Espíritu Santo.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide slide-content d-flex align-items-center">
                                    <div class="single-slide"><br><br><br><br><br><br><br>
                                        <div> 
                                            <iframe  class="configurarvideo" src=https://www.youtube.com/embed/ehOsyVQDjNo?rel=0&loop=1&playlist=ehOsyVQDjNo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                             </div>
                             <div class="test-pagination"></div>
                            </div>
                            </div>
                        </div>

                    </div>  
                </div>
            </div>


            <!-- Add Control -->
            <span class="arr-left"><i class="fa fa-angle-left"></i></span>
            <span class="arr-right"><i class="fa fa-angle-right"></i></span>
        </div>
        <div class="texture"></div>
        <div class="diag-bg"></div>
    </section>
    <!-- Hero End -->
    <!-- Call To Action Start -->
    <section class="cta" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="text-center cta-content d-xl-flex align-items-center justify-content-around text-xl-left">
                <div class="content" data-aos="fade-right" data-aos-delay="200">
                    <h2>ULTIMAS NOTICIAS</h2>
                    <p>Ya salió el nuevo video de "La Bendición Siquirres" puesdes verlo aquí</p>
                </div>
                <div class="subscribe-btn" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                    <a href="https://www.youtube.com/watch?v=ehOsyVQDjNo" target="_blank" class="btn btn-primary">Ir al video</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->
    <!-- Services Start -->
    <section class="services">
        <div class="container">
            <div class="text-center title">
                <h6>Una Iglesia en constante crecimiento</h6>
                <h1 class="title-blue">Nuestros Servicios</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="edicionsup">
                        <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                            <img class="mr-4" src="assets/images/discurso.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Consejería</h5>
                                  <p style="text-align:justify;" class="edicionsup">Todo nuestro equipo pastoral está en la disposición de orar por tí 
                                   y ayudarte a tomar las mejores decisiones. </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="edicionsup">
                        <div class="media" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                            <img class="mr-4" src="assets/images/birrete.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Academía de Obreros</h5> 
                                <p style="text-align:justify;" class="edicionsup">Tenemos un equipo de maestros capacitados en formar obreros para
                                nuestro Señor Jesús. Para servir en todas las áreas de la iglesia. 
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="edicionsup">
                        <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                            <img class="mr-4" src="assets/images/correo.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Peticiones de Oración</h5>
                                <p style="text-align:justify;" class="edicionsup"> Queremos orar por tí, creemos en un Dios poderoso que hace milagros.
                                Jesús es la solución a tus problemas. </p> 
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="edicionsup">
                        <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                            <img class="mr-4" src="assets/images/guitarra.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Académia de Musica</h5>
                                <p style="text-align:justify;" class="edicionsup">Conocemos la importancia de la música en la iglesia de Cristo, por lo que es nuestro
                                compromiso formar músicos con exelencia tanto musical como espiritual. </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="edicionsup">
                        <div class="media" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                            <img class="mr-4" src="assets/images/molecula.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Redes</h5>
                                <p style="text-align:justify;" class="edicionsup">Juntos crecemos mejor, te intivamos a unirte 
                                a nuestras diferentes redes de jovenes, damas, caballeros y niños. </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="edicionsup">
                        <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                            <img class="mr-4" src="assets/images/red-del-globo.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Programa Social</h5>
                                <p style="text-align:justify;" class="edicionsup">Contamos con programa de ayuda social a personas de escasos recursos, 
                                trabajamos fuertemente en las comunidades indígenas donde hay gran necesidad.  
                                Si necesitas ayuda o quieres realizar alguna donación no dudes en comunicarte con nosotros. </p>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!-- Featured Start -->
    <section class="featured">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
                <div class="title">
                        <h6 class="title-primary">Alabanza y Adoración</h6>
                        <div class="edicionsup">
                        <h1 class="title-blue">Adoramos a Dios con toda nuestra alma, mente y corazón...</h1>
                        </div>
                    </div>
                    <p class="edicionsup">La alabanza y la adoración es parte del diario vivir en nuestras iglesias, sabemos que Dios se mueve 
                   	cuando su pueblo le adora. Te invitamos a buscar un espacio en tu día a día para buscar esa comunión con Dios
                   y entrar a su presencia. </p>
                    <a href="musica.html" class="btn btn-primary">Ver Mas</a>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="400" data-aos-duration="800">
                    <div class="featured-img">
                            <img class="featured-big" id="grande" src="assets/images/featured-img1.png" alt="Featured 1">
                            <img class="featured-small" id="pequeña" src="assets/images/featured-img2.png" alt="Featured 2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured End -->
    <!-- Recent Posts Start -->
    <section class="recent-posts">
        <div class="container">
            <div class="text-center title">
                <h6 data-aos="fade-right" data-aos-delay="200">Meditaciones de la palabra de Dios</h6>
                <h1 data-aos="fade-right" data-aos-delay="200"class="title-blue">Reflexiones</h1>
            </div>	       
            <div class="row">
                <div class="col-sm">
                    <div class="card" style="width: 18rem;" data-aos="zoom-out-down" data-aos-duration="1500">
                        <img src="assets/images/post2.jpg" class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">¿Qué conduce tu vida?</h5>
                          <p class="card-text">Todos en la vida somos conducidos por algo, ¿Es Cristo tu capitán?</p>
                          <a href="Reflexion1.html" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
            </div>
	    <a href="reflex.html" class="btn btn-primary">Ver Mas</a>
        </div>
    </section>
    <!-- Recent Posts End -->
    <!-- Trust Start -->
    <section class="trust">
        <div class="container">
            <div class="row">
                <div class="col-lg-9" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                    <div class="title">
                        <h6 class="title-primary">Multimedia</h6>
                        <h1>Visita nuestra galería</h1>
                    </div>
                    <p class="edicionsup">Contiene fotos de las actividades y eventos realizados en nuestras congregaciones.
                    </p>
                    <h5>Eventos</h5>
                    <ul class="list-unstyled">
                        <li>Campañas</li>
                        <li>Redes</li>
                        <li>Campamentos</li>
                        <li>Viajes recreativos</li>
                    </ul>
                </div>
                <div class="col-md-4 gallery">
                    <div class="row no-gutters h-100">
                        <a class="w-50 h-100 gal-img" id="gal-img5" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="400" href= "galeria.html">
                            <img class="img-fluid img-responsive" src="assets/images/gallery1.jpg" alt="gallery">
                            
                        </a>
                        <a class="w-50 h-50 gal-img gal-img2" data-aos="fade-up"
                            data-aos-delay="400" data-aos-duration="600" href="galeria.html" >
                            <img class="img-fluid" src="assets/images/gallery2.jpg" alt="gallery">
                        </a>
                        <a class="w-50 h-50 gal-img gal-img3" data-aos="fade-up"
                            data-aos-delay="0" data-aos-duration="600" href= "galeria.html">
                            
                            <img class="img-fluid" src="assets/images/gallery3.jpg" alt="gallery">
                        </a>
                    </div>
                </div>
            </div>
                <div class="text-center">
                <a href="galeria.html" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </section>
    <!-- Trust End -->
    <!-- Pricing Start -->
    <section class="pricing-table">
        <div class="container">
            <div class="text-center title">
                <h6 class="title-primary">Iglesias Redimidos de Jehová</h6>
                <h1 class="title-blue">Horario de Servicios</h1>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="text-center single-pricing" data-aos="fade-up" data-aos-delay="0"
                        data-aos-duration="600">
                        <span>Semanal</span>
                         <br>
                        <h2>Iglesia San Martín</h2>
                       <p class="desc">50m norte, 100 oeste y 200 Norte de Cable Caribe, San Martín</p>
                       <p class="price">Horario de Cultos</p>
                        <p>Jueves: 6:30 p.m </p>
                        <p>Sábados: 6:30 p.m</p>
                        <p style="margin-bottom: 65px;">Domingos: 10:00 a.m</p>
                        <a href="#" class="btn btn-primary">Contacto</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center single-pricing" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="600">
                        <span>Semanal</span>
                        <br>
                        <h2>Iglesia La Victoria</h2>
                        <p class="desc">50m norte, 25 oeste del predio Linaco, Barrio la victoria</p>
                        <p class="price">Horario de Cultos</p>
                        <p>Martes: 6:00 p.m</p>
                        <p>Jueves: 6:00 p.m </p>
                        <p>Sábados: 5:00 p.m</p>
                        <p>Domingos: 10:00 a.m</p>
                        <a href="#" class="btn btn-primary">Contacto</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center single-pricing" data-aos="fade-up" data-aos-delay="600"
                        data-aos-duration="600">
                        <span>Semanal</span>
                        <br>
                        <h2>Iglesia Emmanuel</h2>
                        <p class="desc">Barrio El Cocal, 75 m Este de la Escuela El Cocal</p>
                        <br>
                        <p class="price">Horario de Cultos</p>
                        <p>Martes: 6:00 p.m</p>
                        <p>Jueves: 6:00 p.m </p>
                        <p>Sábados: 5:00 p.m</p>
                        <p>Domingos: 10:00 a.m</p>
                        
                        <a href="#" class="btn btn-primary">Contacto</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing End -->
    <!-- Testimonial and Clients Start -->
    <section class="testimonial-and-clients">
        <div class="container">
        	<div class="text-center title">
        		<br><br>
                <h1  style="color:white;" >Nuestro Cuerpo Pastoral</h1>
         </div>   
            <div class="testimonials">
                <div class="swiper-container test-slider">
                    <div class="swiper-wrapper">
                        <div class="text-center swiper-slide">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-9">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="assets/images/test1.jpg" alt="Testimonial 1">
                                    </div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">Pastor Miguel Castro Cambornero</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">PASTOR DE LA IGLESIA LA VICTORIA</span>
                                    <p class="transp" data-aos="fade-up" data-aos-delay="600" data-aos-duration="900"
                                        data-aos-offset="0">Fundador de nuestra misión y Pastor Oficial de la Iglesia en la Victoria.</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center swiper-slide">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-9">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="assets/images/pastoramarta.jpg" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">Pastora Marta Porras Porras</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">PASTORA IGLESIA EMMANUEL</span>
                                    <p class="transp" data-aos="fade-up" data-aos-delay="600" data-aos-duration="900"
                                        data-aos-offset="0">Pastora oficial de Redimidos de Jehová Emmanuel en el Cocal donde sirve con su esposo Miguel</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center swiper-slide">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-9">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="assets/images/roger.jpg" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">Pastor Roger Salazar</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">PASTOR DE LA IGLESIA SAN MARTÍN</span>
                                    <p class="transp" data-aos="fade-up" data-aos-delay="600" data-aos-duration="900"
                                        data-aos-offset="0">El Pastor Roger es nuestro más reciente miembro del cuerpo 
                                    pastoral le sirve al Señor junto a su esposa en la Iglesia <br>
                                    Redimidos de Jehová San Martín</p>
                                    </div>
                                </div>
                           </div>
                       </div>
                    <div class="test-pagination"></div>
                </div>
            </div>
	
        </div>
    </section>
    <!-- Testimonial and Clients End -->
    <div class="test-pagination"></div>
    <!-- Footer Start -->
    <?php
        include("footer.php");
    ?>
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