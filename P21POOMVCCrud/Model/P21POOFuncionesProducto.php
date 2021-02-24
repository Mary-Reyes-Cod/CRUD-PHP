<?php
   require_once ('Model/P21POOConexion.php');//como todo parte del Index, la ruta debe ponerse como se declarar en index
   class ProductosModel{
       private $conexionBD;
       private $resultadosPorPagina=3;
       public function __construct(){//para conectar (siempre lleva el nombre por defecto  __construct)
           $this->conexionBD=Conexion::Conectar();//acceso a bd y metodo
       }
       public function getInicioPaginacion(){
        if(isset($_GET["pagina"])){
            if($_GET["pagina"]==1){
                header("Location:P21POOIndex.php");
            }else{
                $primeraPagina=$_GET["pagina"];
            }
           }else{
            $primeraPagina=1;
           }
           $inicioLimite=($primeraPagina-1)*$this->resultadosPorPagina;
           return $inicioLimite;
       }
       public function getTotalPaginacion(){ 
        $consultaSinLimite="SELECT * FROM producto";
        $seleccion=$this->conexionBD->prepare($consultaSinLimite);
        $seleccion->execute(array());
        $numResultados=$seleccion->rowCount();
        $totalPaginacion=ceil($numResultados/$this->resultadosPorPagina);
        return $totalPaginacion;
    }
      
       public function getSeleccionProductos(){
          $inicio=$this->getInicioPaginacion();
          $consulta=$this->conexionBD->query("SELECT * FROM producto LIMIT $inicio,$this->resultadosPorPagina")->fetchAll(PDO::FETCH_OBJ);
          return $consulta;
       }       
   }
?>