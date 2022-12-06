<?php

  include '../lib/config.php';

  $query = "SELECT * from pronosticogratuito WHERE Estado=0";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'id' => $row['id'],
      'equipo1' => $row['equipo1'],
      'equipo2' => $row['equipo2'],
      'fechaJuego' => $row['fechaJuego'],
      'Liga' => $row['Liga']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
