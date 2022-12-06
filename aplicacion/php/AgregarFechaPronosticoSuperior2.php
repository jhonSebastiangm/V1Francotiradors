<?php

    include '../lib/config.php';

if(isset($_POST['fechaNuevoPronostico2'])) {
  $fechaNuevoPronostico = $_POST['fechaNuevoPronostico2'];
  $queryfechapronosticogratuito = "INSERT INTO fechapronosticosuperior2(fecha) VALUES ('$fechaNuevoPronostico')";
  $result = mysqli_query($connection, $queryfechapronosticogratuito);

  if (!$result) {
    die('queryfechapronosticogratuito Failed.');
  }

  echo "queryfechapronosticogratuito Added Successfully";  

}

?>
