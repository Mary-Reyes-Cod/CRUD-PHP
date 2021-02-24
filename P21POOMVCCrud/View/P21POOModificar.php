<?php
     $id=$_GET["Id"];
 //Para obtener los valores enviados y mostrarlos en sig formulario hacer:
     $nom=$_GET["Nom"]; 
     $tipo=$_GET["Tipo"];
     $des=$_GET["Des"];
     $pre=$_GET["Pre"];
     $exis=$_GET["Exis"];
     $fech=$_GET["Fech"];

?>
<html>
<head>
     <title>LOGIN POO</title>
     <meta name="Mary Reyes" charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     
</head>
<body>  
     <div class="container">
         <div class="row justify-content-md-center">
             <div class="col-6">
                <h5>Modificar datos</h5>
                <hr>
                <form action="../Controller/P21POOControladorInsert.php" method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                          <input class="form-control" type="hidden" name="id" id="id"value="<?php echo $id?>">
                     </div>
                     <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input class="form-control" type="text" name="nombre" id="nombre"value="<?php echo $nom?>">
                     </div>
                     <div class="form-group">
                          <label for="tipo">Tipo</label>
                          <select class="form-control" name="tipo" id="tipo">
                               <option><?php echo $tipo?></option>
                               <option>AUDIFONOS</option>
                               <option>CABLES</option>
                               <option>CPU</option>
                               <option>DISCO DURO</option>
                               <option>FUENTE DE PODER</option>
                               <option>GABINETE</option>
                               <option>MEMORIAS RAM</option>
                               <option>MEMORIAS USB</option>
                               <option>MOTHERBOARD</option>
                               <option>MONITOR</option>
                               <option>MOUSE</option>
                               <option>TECLADO</option>
                               <option>VENTILADOR</option>
                               <option>OTROS ACCESORIOS</option>
                          </select>
                     </div>
                     <div class="form-group">
                          <label for="descripcion">Descripción</label>
                          <input class="form-control" type="text" name="descripcion" id="descripcion" value="<?php echo $des?>">
                     </div>
                     <div class="form-group">
                          <label for="precio">Precio</label>
                          <input class="form-control" type="text" name="precio" id="precio" value="<?php echo $pre?>">
                     </div>
                     <div class="form-group">
                          <label for="existencia">Existencia</label>
                          <select class="form-control" name="existencia" id="existencia">
                               <option><?php echo $exis?></option>
                               <option>SI</option>
                               <option>NO</option>
                          </select>
                     </div>
                     <div class="form-group">
                          <label for="fecha">Fecha</label>
                          <input class="form-control" type = "date" name="fecha" id="fecha"value="<?php echo $fech?>">
                     </div>
                     <div class="form-group">
                          <input class="form-control-file" type = "file" name="imagen" id="imagen">
                     </div>
                     <button type="submit" class="btn btn-primary btn-lg btn-block" name="editar" id="editar">Modificar</button>
                </form>
             </div>
         </div>
     </div>
    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
     
</body>
</html>