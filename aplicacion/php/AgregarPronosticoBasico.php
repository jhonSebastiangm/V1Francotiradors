<?php

    include '../configuracion/config.php';

if(isset($_POST['Equipo1'])) {
  $Equipo1 = $_POST['Equipo1'];
  $Equipo2 = $_POST['Equipo2'];
  $fechaJuego = $_POST['fechaJuego'];
  $Liga = $_POST['Liga'];
  $Estadio = $_POST['Estadio'];
  $cuota = $_POST ['cuota'];
  $querypronosticogratuito = "INSERT INTO pronosticobasico(Equipo1, Equipo2, fechaJuego, Liga, Estadio, cuota) VALUES ('$Equipo1', '$Equipo2', '$fechaJuego', '$Liga', '$Estadio','$cuota')";
  $result = mysqli_query($connection, $querypronosticogratuito);

  if (!$result) {
    die('querypronosticogratuito Failed.');
  }

  echo "pronosticogratuito Added Successfully";  

}

?>
