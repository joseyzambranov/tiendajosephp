<?php include("../template/header.php") ?>

<?php

$txtID= (isset($_POST['textID']))?$_POST['textID']:"";
$txtNombre= (isset($_POST['textNombre']))?$_POST['textNombre']:"";
$txtPrecio= (isset($_POST['textPrecio']))?$_POST['textPrecio']:"";
$txtImg= (isset($_FILES['textImg']['name']))?$_FILES['textImg']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../setting/db.php");

switch($accion){


    case "agregar":
        //INSERT INTO `producto` (`id`, `nombre`, `precio`, `img`) VALUES (NULL, 'Nike Jordan', '149.99', 'img.jpg'); 
        $sentenciaSQL = $conexion->prepare("INSERT INTO `producto` (nombre,precio,img) 
                                            VALUES (:nombre,:precio,:img);");
        $sentenciaSQL->bindParam(':nombre',$txtNombre);
        $sentenciaSQL->bindParam(':precio',$txtPrecio);
        $sentenciaSQL->bindParam(':img',$txtImg);
        $sentenciaSQL->execute();
        break;

    case "modificar":
         echo "preciono boton de modificar";
         break;

    case "cancelar":
         echo "preciono boton de cancelar";
         break;
}

$sentenciaSQL = $conexion->prepare("SELECT * FROM producto");
$sentenciaSQL->execute();
$listaProducto=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>


<div class="container">
  <div class="row">
    <div class="col-5">
    <div class="card">
        <div class="card-header">
            dato de libro
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" >
                <div class = "form-group">
                <label for="textID">ID</label>
                <input type="text" class="form-control" id="textID" name="textID" placeholder="ID">
                </div>
                <div class = "form-group">
                <label for="textID">Nombre:</label>
                <input type="text" class="form-control" id="textNombre" name="textNombre" placeholder="Nombre">
                </div>
                <div class = "form-group">
                <label for="textID">Precio</label>
                <input type="text" class="form-control" id="textPrecio" name="textPrecio" placeholder="Precio">
                </div>
                <div class = "form-group">
                <label for="textID">Imagen</label>
                <input type="file" class="form-control" id="textImg" name="textImg" placeholder="Imagen">
                </div>
                
                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="cancelar" class="btn btn-info">Cancelar</button>
                </div>
            </form>
            
        </div>
        
    </div>
    </div>
    <div class="col-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($listaProducto as $producto) {?>
            <tr>
                <td><?php echo $producto['id']?></td>
                <td><?php echo $producto['nombre'] ?></td>
                <td><?php echo $producto['precio'] ?></td>
                <td><?php echo $producto['img'] ?></td>
                <td>Seleccionar |  Borrar</td>
            </tr>
            <?php } ?>
            
        </tbody>
    </table>
    </div>



<?php include("../template/footer.php") ?>