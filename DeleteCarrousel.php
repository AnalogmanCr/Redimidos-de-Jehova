<?php
include("CarouselController.php");
$ID = $_GET['ID'];
$TIPO = $_GET['TIPO'];
$RUTA = $_GET['RUTA'];
$resultado = new CarrouselDinamico();
$resultado->borrarDatos($ID);
if ($TIPO == "Imagen") {
    $Carpeta = $_SERVER['DOCUMENT_ROOT'] . "/REDIMIDOS DE JEHOVA/Galeria/carrousel/" . $RUTA;
    unlink($Carpeta);
}
header("Location:ConfigCarousel.php");
