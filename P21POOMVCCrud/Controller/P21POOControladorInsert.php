<?php
require_once ('../Model/P21POOConfig.php');
        if(isset($_POST['agregar'])){
            require_once ("../Model/P21POOInsert.php");
            $producto=new Insertar(); 
             $nom=$_POST['nombre'];
             $tipo=$_POST['tipo'];
             $des=$_POST['descripcion'];
             $pre=$_POST['precio'];
             $exis=$_POST['existencia'];
             $fech=$_POST['fecha'];
             $nombreImg=$_FILES['imagen']['name'];
             $tipoImg=$_FILES['imagen']['type'];
             if($tipoImg=="image/jpg" || $tipoImg=="image/jpeg" || $tipoImg=="image/png"){
                 $rutaDestino=$_SERVER['DOCUMENT_ROOT'].RUTA;//ruta final destino
                 move_uploaded_file($_FILES['imagen']['tmp_name'],$rutaDestino.$nombreImg);//se mueve imagen del directorio temporal a la ruta final
                 $datos=array($nom,$tipo,$des,$pre,$exis,$fech,$nombreImg);
                 $inserta=$producto->getInsertProductos($datos); 
                 if($inserta==1){
                    header("Location:../P21POOIndex.php");
                 }
            }else{
                // header("Location:../P21POOIndex.php");
                 echo "<script>
                 alert('Formato no permitido. Cargar imagen .jpg, .jpeg, png');
                 window.location= '../P21POOIndex.php'
                 </script>";
             }              
              
             
        }else if(isset($_POST['editar'])){
            require_once ("../Model/P21POOEdit.php");
            $producto=new Editar();
            $id=$_POST["id"];
            $nom=$_POST["nombre"];
            $tipo=$_POST["tipo"];
            $des=$_POST["descripcion"];
            $pre=$_POST["precio"];
            $exis=$_POST["existencia"];
            $fech=$_POST["fecha"];
            $nombreImg=$_FILES['imagen']['name'];
            $tipoImg=$_FILES['imagen']['type'];
            if(empty($nombreImg)){
                 $datos=array($id,$nom,$tipo,$des,$pre,$exis,$fech);                
                 $modifica=$producto->getEditaNoImgProducto($datos);
                 if($modifica==1){
                     header("Location:../P21POOIndex.php");
                 }    
            }else{
                if($tipoImg=="image/jpg" || $tipoImg=="image/jpeg" || $tipoImg=="image/png"){
                     $rutaDestino=$_SERVER['DOCUMENT_ROOT'].RUTA;//ruta final destino
                     move_uploaded_file($_FILES['imagen']['tmp_name'],$rutaDestino.$nombreImg);//se mueve imagen del directorio temporal a la ruta final
                     $datos=array($id,$nom,$tipo,$des,$pre,$exis,$fech,$nombreImg);                
                     $modifica=$producto->getEditarProducto($datos);
                     if($modifica==1){
                        header("Location:../P21POOIndex.php");
                     }     
                }else{
                    echo "<script>
                    alert('Formato no permitido. Cargar imagen .jpg, .jpeg, png');
                    window.location= '../P21POOIndex.php';
                    </script>";
                 }
                   
            }     
            
        }

?>