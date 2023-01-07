<?php

  include '../configuracion/config.php';

  $query = "select * from fechapronosticobasico order by id desc limit 1";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'fecha' => $row['fecha']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
