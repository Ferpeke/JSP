<?php
  
  require_once '../app/conexion.php';


  // print($_POST['bandera_nombre']);
  // print($_POST['bandera_password']);


  $conexion = conexion();

  $nombre = $_POST['bandera_nombre'];
  $password = $_POST['bandera_password'];


  echo($nombre);
  
  $query_insert = "INSERT INTO t_personas (nombre, password) VALUES (?, ?)";

  $insert_preparado = $conexion->prepare($query_insert);
  

  $insert_preparado->bind_param('ss', $nombre, $password);

  $resultado_insert = $insert_preparado->execute();

  if ($resultado_insert) {
    echo 1;
  } else {
    echo 0;
  }

  $conexion->close();
  
  
?>