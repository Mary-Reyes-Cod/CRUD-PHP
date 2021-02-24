<?php
 require_once ('P21POOConexion.php');
 require_once ('P21POOConfig.php');
   class Insertar{
    private $conexionBD;
    public function __construct(){//para conectar (siempre lleva el nombre por defecto  __construct)
        $this->conexionBD=Conexion::Conectar();//acceso a bd y metodo
    }
    public function getInsertProductos($datos){
        try {
             $insertar="INSERT INTO producto (nombre,tipo,descripcion,precio,existencia,fechaLlegada,imagen) VALUES (:nom,:tip,:des,:pre,:exis,:fech,:img)";
             $agregar=$this->conexionBD->prepare($insertar);
             $agregar->execute(array(':nom'=>$datos[0],':tip'=>$datos[1],':des'=>$datos[2],':pre'=>$datos[3],':exis'=>$datos[4],':fech'=>$datos[5],':img'=>$datos[6]));
             return $agregar;     
        } catch (Exception $e) {
             die("Error de consulta. ".$e->getMessage()." Linea".$e->getLine());
        }          
    }

   }

?>