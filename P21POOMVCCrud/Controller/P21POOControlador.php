<?php
    require_once ('Model/P21POOFuncionesProducto.php');
    $producto=new ProductosModel();
    $registros=$producto-> getSeleccionProductos();
    $paginacion=$producto->getTotalPaginacion();    
    require_once ('View/P21POOVistaProducto.php');
?>