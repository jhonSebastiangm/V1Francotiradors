<?php

  include '../lib/config.php';
  $id = $_POST['id'];
  $query = "SELECT * from pronosticosuperior1 WHERE id='$id'";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'equipo1' => $row['equipo1'],
      'equipo2' => $row['equipo2'],
      'fechaJuego' => $row['fechaJuego'],
      'Liga' => $row['Liga'],
      'Estadio' => $row['Estadio'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
?>
