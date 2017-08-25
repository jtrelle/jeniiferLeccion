<?php

class Demo
{
    private $idDemo;
    private $nombre;
    private $tipo;
    private $fecha;
    private $imagen;
    
     function __construct($idDemo, $nombre, $tipo, $fecha, $imagen ) {
       $this->idDemo = $idDemo;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
       $this->fecha = $fecha;
      $this->imagen = $imagen;

     }
    
     function setIdDemo($idDemo){
       $this->idDemo = $idDemo;
     } 
     function getIdDemo(){
       return $this->idDemo;
     } 


     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 


     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 


     function setFecha($fecha){
       $this->fecha= $fecha;
     } 
     
     function getFecha(){
       return $this->fecha;
     } 
  

      function setImagen($imagen){
       $this->imagen= $imagen;
     } 
     
     function getImagen(){
       return $this->iamgen;
     } 


}

?> 
