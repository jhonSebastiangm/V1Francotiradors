<?php

    include '../lib/config.php';

if(isset($_POST['fechaNuevoPronostico'])) {
  $fechaNuevoPronostico = $_POST['fechaNuevoPronostico'];
  $queryfechapronosticogratuito = "INSERT INTO fechapronosticogratuito(fecha) VALUES ('$fechaNuevoPronostico')";
  $result = mysqli_query($connection, $queryfechapronosticogratuito);

  if (!$result) {
    die('queryfechapronosticogratuito Failed.');
  }

  echo "queryfechapronosticogratuito Added Successfully";  

}

?>
