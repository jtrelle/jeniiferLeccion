<?php
session_start();
?>




<html>
<head>

<title>sesion php cookie</title>
<script type="text/javascript" src="js/java.js"></script>

</head>

<body>

<?php
$id=$_GET["id"];

include_once('DemoCollector.php');
include_once('Demo.php');
$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
print_r($ObjDemo);

?>




<aside>

<form action="index.php" method="post"> <!--voy entregar esta envformacion por metdodo post al login.php-->

  <fieldset>
    <label>Nombre:</label>
       <input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre();?>"readonly>

      </br> 
    <label>Tipo:</label>
       <input type="text" name="tipo" value="<?php echo $ObjDemo->getTipo();?>"readonly>

       </br> 
    <label>Fecha:</label>
       <input type="text" name="fecha" value="<?php echo $ObjDemo->getFecha();?>"readonly>

  </form>   

     </fieldset> 


 <h5> SUBIR IMAGEN </h5>
<form action="subir.php" method="POST" enctype="multipart/form-data">
<label for="imagen">Imagen:</label>
<input type="file" name="imagen" id="imagen" />
<input type="submit" name="subir" value="Subir"/>
</form>

      
  <a href='formularioDemoEditar.php?id=" .$c->getIdDemo()."'>EDITAR</a>


  <a href='eliminar.php?id=" .$c->getIdDemo()."'>Eliminar</a>




  

</aside>



</body>
</html>
