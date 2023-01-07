<?php

  include '../configuracion/config.php';
  $query = "SELECT numero from contadorperdidas";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'numero' => $row['numero']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
