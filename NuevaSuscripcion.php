<?php
    require ("Suscribirse.php");
    $domcorreo = $_GET['correo'];
    $suscriptor = new Suscribir();
    $result = $suscriptor->NuevoSuscriptor($domcorreo);
    if ($result=="ok"){
        header("location:index.php?suscriptor=ok");
    }else{
        if($result=="registrado"){
            header("location:index.php?suscriptor=registrado");
        }
    }
?>