<?php

//necesita utulizar una propiedad de la coneccion
include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  //areglo convierto a objto
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ");        //areglo de datos bidimensional
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){ //arreglo de objetos de tipo demo (fila - objeto)
      $aux = new Demo($c{'iddemo'},$c{'nombre'},$c{'tipo'},$c{'fecha'},$c{'imagen'}); //cada linea crea un objeto
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        //retorna el arreglo de demo
  }

  function showDemo($id){
    $row = self::$db->getRows("SELECT * FROM demo WHERE iddemo= ?", array("{$id}"));
    $ObjDemo = new Demo($row[0]{'iddemo'}, $row[0]{'nombre'}, $row[0]{'tipo'}, $row[0]{'fecha'}, $row[0]{'imagen'});
    return $ObjDemo;
  }





  function updateDemo($id,$nombre){
    $insertrow = self::$db->updateRow
    ("UPDATE public.demo SET nombre = ?  WHERE iddemo= ?", array("{$nombre}",$id));
    
  }

  /*

 function createDemo($nombre){
    $insertrow = self::$db->insertRow
    ("INSERT FROM public.demo WHERE (nombre) VALUES (?)", array("{$nombre}"));

  }

}*/
}
?>




