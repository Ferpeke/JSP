<?php
  
 function conexion() {
   $conexion = new mysqli('localhost', 'root', '', 'persona' );

   if ($conexion->connect_errno) {
     echo 'Error en la conexion'.$conexion->connect_errno;
   }

   $conexion->set_charset("utf8");

   return $conexion;
 }
 
  
?>