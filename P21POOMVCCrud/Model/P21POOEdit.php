<?php
  require_once ('P21POOConexion.php');
    class Editar{
        private $conexionBD;
        public function __construct(){
            $this->conexionBD=Conexion::Conectar();            
        }
        public function getEditarProducto($datos){
            try {
                $update="UPDATE producto SET nombre=:nom,tipo=:tip,descripcion=:des,precio=:pre,existencia=:exis,fechaLlegada=:fech,imagen=:img WHERE idPro=:id";
                $modificar=$this->conexionBD->prepare($update);
                $modificar->execute(array(':id'=>$datos[0],':nom'=>$datos[1],':tip'=>$datos[2],':des'=>$datos[3],':pre'=>$datos[4],':exis'=>$datos[5],':fech'=>$datos[6],':img'=>$datos[7]));
                return $modificar;
            } catch (Exception $e) {
                die("Error de consulta. ".$e->getMessage()." Linea".$e->getLine());
            }
        }
        public function getEditaNoImgProducto($datos){
            try {
                $update="UPDATE producto SET nombre=:nom,tipo=:tip,descripcion=:des,precio=:pre,existencia=:exis,fechaLlegada=:fech WHERE idPro=:id";
                $modificar=$this->conexionBD->prepare($update);
                $modificar->execute(array(':id'=>$datos[0],':nom'=>$datos[1],':tip'=>$datos[2],':des'=>$datos[3],':pre'=>$datos[4],':exis'=>$datos[5],':fech'=>$datos[6]));
                return $modificar;
            } catch (Exception $e) {
                die("Error de consulta. ".$e->getMessage()." Linea".$e->getLine());
            }
        }

    }
?>