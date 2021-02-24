<?php
    require_once ('../Model/P21POODelete.php');
    $producto=new Eliminar();
    $datos=$_GET["Id"];
    $elimina=$producto->getDeleteProducto($datos);
    if($elimina==1){
        header("Location:../P21POOIndex.php");
    }
?>