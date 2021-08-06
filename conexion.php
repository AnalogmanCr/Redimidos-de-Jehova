<?php
    include("config.php");
    class Conexion{
        protected $dbconexion;
        public function Conexion()
        {
            try{
                $this->dbconexion = new PDO('mysql:host=' . DBHOST . '; dbname=' . DBNOMBRE, DBUSUARIO, DBCONTRA);
                $this->dbconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->dbconexion->exec("SET CHARACTER SET " . DBCHARSET);
                return $this->dbconexion;
            }
            catch (Exception $e)
            {
                die("Error" . $e->getMessage());
                echo "Error en linea: " . $e->getLine();
            }
            
        }

    }
?>