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

if (isset($_SESSION['misesion'])){
   session_destroy();
	echo "Ud. ha cerrado sesion exitosamente";
  echo "<a href='index.php'>Volver</a>";
  	}

else{
  echo"error... <br/>";
  echo "<a href='index.php'>Volver</a>";
}

?>





</aside>



</body>
</html>