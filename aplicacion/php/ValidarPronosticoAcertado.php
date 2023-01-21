<?php

  include '../configuracion/config.php';
  $id = $_GET['id']; 
  $query = "SELECT * from resultadoitemspronosticobasico WHERE idPronostico = '$id'";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
  while($row = mysqli_fetch_array($result)) {
    if ($row['cumple'] == 0) {
        $cumple = "perdido";
        break;
    }
    if ($row['cumple'] == 1) {
        $cumple = "ganado";
    }
  }

  $jsonstring = json_encode($cumple);
  echo $jsonstring;
?>
