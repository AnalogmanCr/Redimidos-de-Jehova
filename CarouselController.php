<?php
include "conexion.php";
class CarrouselDinamico extends Conexion
{
    private $tipo = "";
    private $ruta = "";
    private $usuario = "";
    private $fecha = "";
    private $descripcion = "";
    public function CarrouselDinamico()
    {
        parent::Conexion();
    }
    public function SetDatos($tipo, $ruta, $usuario, $fecha, $descripcion)
    {
        $this->tipo = $tipo;
        $this->ruta = $ruta;
        $this->usuario = $usuario;
        $this->fecha = $fecha;
        $this->descripcion = $descripcion;
    }
    public function InsertarRegistro()
    {
        $sql = "INSERT INTO CAROUSEL (TIPO, RUTA, USUARIO, FECHA, DESCRIP_ANUNCIO) VALUES(:tipo, :ruta, :usuario, :fecha, :descrip)";
        $sentencia = $this->dbconexion->prepare($sql);
        $sentencia->execute(array(
            ":tipo" => $this->tipo,
            ":ruta" => $this->ruta,
            ":usuario" => $this->usuario,
            ":fecha" => $this->fecha,
            ":descrip" => $this->descripcion
        ));
        $this->dbconexion = null;
    }
    public function getDatos($email)
    {
        $sql = "SELECT * FROM CAROUSEL WHERE USUARIO = :email";
        $sentencia = $this->dbconexion->prepare($sql);
        $sentencia->execute(array(":email" => $email));
        $resultado = $sentencia->fetchall(PDO::FETCH_OBJ);
        return $resultado;
        $this->dbconexion = null;
    }
    public function getDatosFull()
    {
        $sql = "SELECT * FROM CAROUSEL";
        $sentencia = $this->dbconexion->prepare($sql);
        $sentencia->execute(array());
        $resultado = $sentencia->fetchall(PDO::FETCH_OBJ);
        return $resultado;
        $this->dbconexion = null;
    }
    public function borrarDatos($ID)
    {
        $sql = "DELETE FROM CAROUSEL WHERE ID=:id";
        $sentencia = $this->dbconexion->prepare($sql);
        $sentencia->execute(array(":id" => $ID));
        $this->dbconexion = null;
    }
    public function GetUltimaNoticia()
    {
        $sql = "SELECT * FROM CAROUSEL ORDER BY ID DESC";
        $sentencia = $this->dbconexion->prepare($sql);
        $sentencia->execute(array());
        $resultado = $sentencia->fetch(PDO::FETCH_OBJ);
        return $resultado;
    }
}
