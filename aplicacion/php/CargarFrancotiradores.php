<?php

  include '../lib/config.php';

  $query = "SELECT * from francotiradores";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'id' => $row['id'],
      'nombre' => $row['nombre'],
      'ruta' => $row['ruta']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
