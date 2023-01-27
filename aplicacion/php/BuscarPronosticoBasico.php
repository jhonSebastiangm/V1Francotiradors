<?php

  include '../configuracion/config.php';

  $query = "SELECT * from pronosticobasico WHERE Estado=0 order by id desc limit 1;";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'tipoPronostico' => $row['tipoPronostico'],
      'fechaJuego' => $row['fechaJuego'],
      'Liga' => $row['Liga'],
      'url' => $row['url'],
      'Estado' => $row['Estado'],
      'cuota' => $row['cuota'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
