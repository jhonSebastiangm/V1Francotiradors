<?php

  include '../configuracion/config.php';
  $id = $_POST['id'];
  $query = "SELECT * from pronosticobasico WHERE id='$id'";
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
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
?>
