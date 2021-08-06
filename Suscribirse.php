<?php
    require ('conexion.php'); 
    class Suscribir extends Conexion{
        public function Suscribir(){
            parent::Conexion();
        }
        public function NuevoSuscriptor($email){
            if($this->VerificarEmail($email)==false){
                $sql = "INSERT INTO DBSUSCRIPTORES (EMAIL) VALUES (:correo)";
                $resultado = $this->dbconexion->prepare($sql);
                $resultado->execute(array(":correo"=>$email));
                return "ok";
            }
            else
            {
                return "registrado";
            }
            $this->dbconexion=null;
        }
        private function VerificarEmail($email){
            // devuelve true si el email existe
            $consulta = "SELECT * FROM DBSUSCRIPTORES WHERE EMAIL = :correo";
            $result= $this->dbconexion->prepare($consulta);
            $result->execute(array(":correo"=>$email));
            $total_registros = $result->rowCount();
            if($total_registros>0){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>