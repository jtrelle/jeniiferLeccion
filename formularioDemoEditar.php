<?php
session_start();
?>




<html>
<head>

<title>sesion php cookie</title>
<script type="text/javascript" src="js/java.js"></script>

</head>

<body>


<aside>
<?php
$id=$_GET["id"];
include_once('DemoCollector.php');
include_once('Demo.php');
$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
print_r($ObjDemo);

?>

<h2> EDITAR </h2>
<form action="actualizar.php" method="post"> <!--voy entregar esta envformacion por metdodo post al login.php-->

  <fieldset>
    <<label>ID: :</label>
           <input type="text" name="iddemo" value="<?php echo $ObjDemo->getIdDemo();?>"readonly />
        <label>Nombre:</label>
           <input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre();?>" autofocus required>

         <label>Tipo:</label>
           <input type="text" name="tipo" value="<?php echo $ObjDemo->getTipo();?>" autofocus required>
           

           <label>Fecha:</label>
           <input type="text" name="fecha" value="<?php echo $ObjDemo->getFecha();?>" autofocus required>

  

 

<input type="submit" value="Guardar">
 
 </fieldset>
</form> 

</aside>



</body>
</html>
