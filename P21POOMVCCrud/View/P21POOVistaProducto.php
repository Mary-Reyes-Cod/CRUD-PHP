<?php require_once ('Model/P21POOConfig.php'); ?>
<html>
<head>
     <title>CRUD POO</title>
     <meta name="Mary Reyes" charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>  
     <div class="container-fluid">
         <div class="row justify-content-md-center">
             <div class="col">
             <form action="Controller/P21POOControladorInsert.php" method="POST" enctype="multipart/form-data">
                 <table class="table">
                     <thead>
                         <tr>
                             <th scope="col">Clave</th>
                             <th scope="col">Nombre</th>
                             <th scope="col">Tipo</th>
                             <th scope="col">Descripción</th>
                             <th scope="col">Precio</th>
                             <th scope="col">Existencia</th>
                             <th scope="col">Fecha</th>
                             <th scope="col">Imagen</th>
                             <th scope="col">Opciones</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php foreach($registros as $productos): //usar bucle endforeach ?>
                         <tr>
                             <td><?php echo $productos->idPro?></td><!--muestra valor de la BD -->
                             <td><?php echo $productos->nombre?></td>
                             <td><?php echo $productos->tipo?></td>
                             <td><?php echo $productos->descripcion?></td>
                             <td><?php echo $productos->precio?></td>
                             <td><?php echo $productos->existencia?></td>
                             <td><?php echo $productos->fechaLlegada?></td>
                             <td><img src="<?php echo RUTA.$productos->imagen?>" alt="Imagen"style="width:32%;" ></td>
                             <td> 
                 <!-- <a class="link" href="P18POOModificar.php?Id=<?php echo $productos->idPro?>" style="text-decoration:none">Modificar</a><br> CON 1 SOLO VALOR-->  
                 <!-- Para modificar se envia solo el id, si se desean enviar los demas valores para que sean visibles en el formulario de modificar hacer: -->
                                <a class="link" href="View/P21POOModificar.php?Id=<?php echo $productos->idPro?> & Nom=<?php echo $productos->nombre?> &
                                Tipo=<?php echo $productos->tipo?> & Des=<?php echo $productos->descripcion?> & Pre=<?php echo $productos->precio?> &
                                Exis=<?php echo $productos->existencia?> & Fech=<?php echo $productos->fechaLlegada?>" style="text-decoration:none">Modificar</a><br>
                                <a class="link" href="Controller/P21POOControladorDelete.php?Id=<?php echo $productos->idPro?>" style="text-decoration:none">Eliminar</a></td>
                         </tr>
                         <?php endforeach;?>
                         <tr>
                             <td>
                                 <!-- <div class="form-group">
                                     <input class="form-control" type="text" name="id" id="id">
                                 </div> -->
                             </td>
                             <td>
                                 <div class="form-group">
                                     <input class="form-control" type="text" name="nombre" id="nombre">
                                 </div>
                             </td>
                             <td>
                                 <div class="form-group">
                                     <select class="form-control" name="tipo" id="tipo">
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
                             </td>
                             <td>
                                 <div class="form-group">
                                     <input class="form-control" type="text" name="descripcion" id="descripcion">
                                 </div>
                             </td>
                             <td>
                                 <div class="form-group">
                                     <input class="form-control" type="text" name="precio" id="precio">
                                 </div>
                             </td>
                             <td>
                                 <div class="form-group">
                                 <select class="form-control" name="existencia" id="existencia">
                                     <option>SI</option>
                                     <option>NO</option>
                                 </select>
                                 </div>
                             </td>
                             <td>
                                 <div class="form-group">
                                     <input class="form-control" type = "date" name="fecha" id="fecha">
                                 </div>
                             </td>
                             <td>
                                 <div class="form-group">
                                     <input class="form-control-file" type = "file" name="imagen" id="imagen">
                                 </div>
                             </td>
                             <td><button class="btn btn-outline-secondary" type="submit" name="agregar" id="agregar">Agregar</button></td>
                         </tr>
                     </tbody>
                 </table>
             </form>
             </div>
         </div>
     </div>
     <!-- -----paginacion parte01----------- -->
     <footer class="footer">
     <div class="container">
         <div class="row justify-content-md-center">
             <div class="col-md-auto">
                 <nav aria-label="Page navigation example">
                     <ul class="pagination"> 
                        <?php
                        for($i=1;$i<=$paginacion;$i++){  //for para mostrar el numero de paginas obtenidas de resultados                     
                        echo "<li class='page-item'><a class='page-link' href='?pagina=".$i."'>".$i."</a></li>";//muestra numero de pagina con link
                        }
                        ?>  
                     </ul>
                 </nav>
             </div>
         </div>
     </div>
     </footer>
<!-- -----fin paginacion parte01----------- -->   
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>