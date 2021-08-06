<?php
    require ("conexion.php");
    class Usuarios extends Conexion{
        public function Usuarios(){
            parent::Conexion();
        }
        public function VerificarUsuario($email, $password){
            $consulta = "SELECT EMAIL, PASSWORD FROM USUARIOS WHERE EMAIL = :correo AND PASSWORD = :password";
            $resultado = $this->dbconexion->prepare($consulta);
            $resultado->execute(array(
                ":correo"=>$email, 
                ":password"=>$password
            ));
            $total_reg = $resultado->rowCount();
            if($total_reg>0){
                return true;
            }
            else
            {
                return false;
            }
        }
    }
?>