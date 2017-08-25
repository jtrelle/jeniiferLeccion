<?php
session_start();
?>
<html>
<head>

<title>sesion php cookie</title>
<script type="text/javascript" src="js/java.js"></script>

</head>

<body>
<div id="main">

<?php

$nombre=$_POST["nombre"];
$tipo=$_POST["iddemo"];
$fecha=$_POST["iddemo"];
$iddemo=$_POST["iddemo"];

include_once('DemoCollector.php');

$DemoCollectorObj = new DemoCollector();

$DemoCollectorObj->updateDemo($iddemo,$nombre,$tipo,$fecha);

//echo "id :".$iddemo." actualizado a: ".$nombre."</br>";

?>

<div> <a href="formularioVer.php">Volver Inicio </a> </div>

</div>

</body>
</html>
