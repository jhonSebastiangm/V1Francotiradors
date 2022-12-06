<?php

  include '../lib/config.php';
  $id = $_GET['id']; 
  $query = "SELECT * from itemspronosticosuperior1 WHERE idPronosticoSuperior1='$id'";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'Descripcion' => $row['Descripcion'],
      'Resutado' => $row['Resutado'],
      'idPronosticoSuperior1' => $row['idPronosticoSuperior1'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
