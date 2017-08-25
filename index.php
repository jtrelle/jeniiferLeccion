<?php
session_start();
?>




<html>
<head>

<title>sesion php cookie</title>
<script type="text/javascript" src="js/java.js"></script>

</head>

<body>




<section id="sidebar">
</section>
<section id="main">
</section>


<aside>


<?php



include_once("DemoCollector.php");//incluye el demoCollector solo una vez

$id =1;

$DemoCollectorObj = new DemoCollector();



 // echo  "<a href="formularioDemoInset.php">nuevo </a> ";+


echo "<div>";
echo "USUARIOS";             
echo "</div>"; 


foreach ($DemoCollectorObj->showDemos() as $c){


  echo "<div>";
  echo $c->getNombre(). "     " .$c->getTipo() . "        " .$c->getFecha();
  echo " <a href='formularioVer.php?id=" .$c->getIdDemo()."'> PERFIL </a>";

 /* echo $c->getIdDemo() . "  && " .$c->getNombre() . "  && " .$c->getTipo() . "  && " .$c->getFecha();  */  
 /* echo " <a href='formularioDemoEditar.php?id=" .$c->getIdDemo()."'> editar </a>";
  echo " <a href='eliminar.php?id=" .$c->getIdDemo()."'> Eliminar </a>";   */                             
  echo "</div>"; 
}



?>




</aside>



</body>
</html>
