<?php
/*
$_FILES['imagen']['name']; //este es el nombre del archivo que acabas de subir
$_FILES['imagen']['type']; //este es el tipo de archivo que acabas de subir
$_FILES['imagen']['tmp_name'];//este es donde esta almacenado el archivo que acabas de subir.
$_FILES['imagen']['size']; //este es el tamaño en bytes que tiene el archivo que acabas de subir.
$_FILES['imagen']['error']; //este almacena el codigo de error que resultaría en la subida.
//imagen es el nombre del input tipo file del formulario.
*/
if ($_FILES["imagen"]["error"] > 0){
echo "ha ocurrido un error";
} else {
//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
//y que el tamano del archivo no exceda los 100kb
$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
if (in_array($_FILES['imagen']['type'], $permitidos)){
$byte_array = file_get_contents($_FILES['imagen']['tmp_name']);
$image = base64_encode($byte_array);
echo $image;
if ($_FILES['imagen']['type'] == "image/jpg"){
$img = "<img src= 'data:image/jpg;base64, $image' />";
print($img);
}elseif ($_FILES['imagen']['type'] == "image/jpeg"){
$img = "<img src= 'data:image/jpeg;base64, $image' />";
print($img);
}elseif ($_FILES['imagen']['type'] == "image/gif"){
$img = "<img src= 'data:image/gif;base64, $image' />";
print($img);
}elseif ($_FILES['imagen']['type'] == "image/png"){
$img = "<img src= 'data:image/png;base64, $image' />";
print($img);
}
}else {
echo "Archivo Incorrecto";
}
}
?>