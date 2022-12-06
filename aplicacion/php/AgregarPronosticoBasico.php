<?php

    include '../lib/config.php';

if(isset($_POST['Equipo1'])) {
  $Equipo1 = $_POST['Equipo1'];
  $Equipo2 = $_POST['Equipo2'];
  $fechaJuego = $_POST['fechaJuego'];
  $Liga = $_POST['Liga'];
  $Estadio = $_POST['Estadio'];
  $querypronosticogratuito = "INSERT INTO pronosticobasico(Equipo1, Equipo2, fechaJuego, Liga, Estadio) VALUES ('$Equipo1', '$Equipo2', '$fechaJuego', '$Liga', '$Estadio')";
  $result = mysqli_query($connection, $querypronosticogratuito);

  if (!$result) {
    die('querypronosticogratuito Failed.');
  }

  echo "pronosticogratuito Added Successfully";  

}

?>
