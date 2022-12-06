<?php

  include '../lib/config.php';
  $id = $_GET['id']; 
  $query = "SELECT * from itemspronosticosuperior3 WHERE idPronosticoSuperior3='$id'";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'Descripcion' => $row['Descripcion'],
      'Resutado' => $row['Resutado'],
      'idPronosticoSuperior3' => $row['idPronosticoSuperior3'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
