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
<TITLE>formulario demo</TITLE>

<h2> EDITAR Objeto Demo </h2>
<form action="guardarDemo.php" method="post"> <!--voy entregar esta envformacion por metdodo post al login.php-->


   
           NOMBRE:<input type="text" name="nombre" autofocus required/>


<input type="submit" value="GUardar demo"/>
  
 
 
</form> 

</aside>



</body>
</html>
