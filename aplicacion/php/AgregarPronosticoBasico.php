<?php

    include '../configuracion/config.php';

if(isset($_POST['tipoPronostico'])) {
  $tipoPronostico = $_POST['tipoPronostico'];
  $fechaJuego = $_POST['fechaJuego'];
  $Liga = $_POST['Liga'];
  $cuota = $_POST['cuota'];
  $url = $_POST['url'];
  $querypronosticogratuito = "INSERT INTO pronosticobasico (tipoPronostico, fechaJuego, Liga, cuota, url) VALUES ('$tipoPronostico','$fechaJuego','$Liga','$cuota','$url')";
  $result = mysqli_query($connection, $querypronosticogratuito);

  if (!$result) {
    die('querypronosticogratuito Failed.');
  }

  echo "pronosticogratuito Added Successfully";  

}

?>
