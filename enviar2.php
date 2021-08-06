<?php

define('CLAVE', '6LcbeUcaAAAAAMwbOJ7v005eNDWuhezT1b_2qDuv');

$token = $_POST['token'];
$action = $_POST['action'];
$cur = curl_init();

curl_setopt($cur, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($cur, CURLOPT_POST, 1);
curl_setopt($cur, CURLOPT_POSTFIELDS, http_build_query(array('secret' => CLAVE, 
                                                            'response' => $token)));
curl_setopt($cur, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cur);
curl_close($cur);

$datos = json_decode($response, true);

print_r($datos);

if ($datos['success']==1 && $datos['score']>=0.5){
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $Mensaje = $_POST['mensaje'];
    // Varios destinatarios
    $para  = 'info@redimidosdejehova.org'; // atención a la coma
    // título
    $título = 'Pagina Web: '. $nombre;
    // Cabeceras adicionales
    $cabeceras = "From: " . $email . "\r\n";
    // Enviarlo
    mail($para, $título, $Mensaje, $cabeceras);
    header('Location:index.html');

}else
{
    echo "Error de validacion";
}

?>