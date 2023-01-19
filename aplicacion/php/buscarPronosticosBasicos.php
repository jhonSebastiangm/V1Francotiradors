<?php

  include '../configuracion/config.php';

  $query = "SELECT * from pronosticobasico";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'id' => $row['id'],
      'tipoPronostico' => $row['tipoPronostico'],
      'fechaJuego' => $row['fechaJuego'],
      'url' => $row['url'],
      'Estado' => $row['Estado'],
      'cuota' => $row['cuota'],
      'Liga' => $row['Liga']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
