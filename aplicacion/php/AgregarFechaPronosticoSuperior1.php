<?php

    include '../lib/config.php';

if(isset($_POST['fechaNuevoPronostico1'])) {
  $fechaNuevoPronostico = $_POST['fechaNuevoPronostico1'];
  $queryfechapronosticogratuito = "INSERT INTO fechapronosticosuperior1(fecha) VALUES ('$fechaNuevoPronostico')";
  $result = mysqli_query($connection, $queryfechapronosticogratuito);

  if (!$result) {
    die('queryfechapronosticogratuito Failed.');
  }

  echo "queryfechapronosticogratuito Added Successfully";  

}

?>
