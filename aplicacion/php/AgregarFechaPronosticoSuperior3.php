<?php

    include '../lib/config.php';

if(isset($_POST['fechaNuevoPronostico3'])) {
  $fechaNuevoPronostico = $_POST['fechaNuevoPronostico3'];
  $queryfechapronosticogratuito = "INSERT INTO fechapronosticosuperior3(fecha) VALUES ('$fechaNuevoPronostico')";
  $result = mysqli_query($connection, $queryfechapronosticogratuito);

  if (!$result) {
    die('queryfechapronosticogratuito Failed.');
  }

  echo "queryfechapronosticogratuito Added Successfully";  

}

?>
