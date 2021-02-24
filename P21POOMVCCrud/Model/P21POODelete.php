<?php
  require_once ('P21POOConexion.php');
   class Eliminar{
       private $conexionBD;
       public function __construct(){
           $this->conexionBD=Conexion::Conectar();
       }
       public function getDeleteProducto($datos){
           try {
               $delete="DELETE FROM producto WHERE idPro=:id";
               $eliminar=$this->conexionBD->prepare($delete);
               $eliminar->execute(array(':id'=>$datos));
               return $eliminar;
           } catch (Exception $e) {
               die("Error de consulta. ".$e->getMessage()." Linea".$e->getLine());
           }
       }
   }
?>