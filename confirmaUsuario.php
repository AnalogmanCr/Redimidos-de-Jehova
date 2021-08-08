<?php
    require ("ClaseUsuarios.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usuario = new Usuarios();
    $result = $usuario->VerificarUsuario($email, $password); 
    if($result==true){
        $rol = $usuario->GetRol($email);
        session_start();
        $_SESSION['usuario'] = $_POST['email'];
        $_SESSION['rol'] = $rol;
        
        header("location:index.php");
    }
    else{
        header("location:login.php?autenticacion=false");
    }
?>