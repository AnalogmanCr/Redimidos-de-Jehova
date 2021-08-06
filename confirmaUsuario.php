<?php
    require ("ClaseUsuarios.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usuario = new Usuarios();
    $result = $usuario->VerificarUsuario($email, $password); 
    if($result==true){
        session_start();
        $_SESSION['usuario'] = $_POST['email'];
        header("location:index.php");
    }
    else{
        header("location:login.php?autenticacion=false");
    }
?>