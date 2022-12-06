<?php

  include '../lib/config.php';
  $id = $_POST['id'];
  $query = "SELECT * from itemspronosticogratuito WHERE idPronosticoGratuito='$id' AND Estado=0";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'Resutado' => $row['Resutado'],
      'Descripcion' => $row['Descripcion'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
