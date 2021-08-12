<?php
// captura de variables
$descripcion = $_POST['descrip'];
$tipo = $_POST["radioImg"];

if ($tipo == "Video") {
    // si es video solo guardamos
    $ruta = $_POST['ruta'];
    $ruta = str_replace("youtu.be", "www.youtube.com/embed", $ruta);
} else {
    //subimos la imagen al servidor
    $ruta = $_FILES['file']['name'];
    $Carpeta = $_SERVER['DOCUMENT_ROOT'] . "/REDIMIDOS DE JEHOVA/Galeria/carrousel/";
    move_uploaded_file($_FILES['file']['tmp_name'], $Carpeta . $ruta);
}
// creamos el registro en la base de datos
date_default_timezone_set('UTC');
$DateAndTime = date('Y-m-d h:i:s a');
include("CarouselController.php");
session_start();
$resultado = new CarrouselDinamico();
$resultado->SetDatos($tipo, $ruta, $_SESSION['usuario'], $DateAndTime, $descripcion);
$resultado->InsertarRegistro();
header("location:ConfigCarousel.php");
