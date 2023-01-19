<?php

    include '../configuracion/config.php';

if(isset($_POST['IdPronosticoResultado'])) {
  $IdPronosticoResultado = $_POST['IdPronosticoResultado']; 

  $cumple = $_POST['cumple'];
  
  $query = "UPDATE pronosticobasico SET Estado = 1 WHERE id = '$IdPronosticoResultado'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }

  if ($cumple==1) {
    $queryGano = "UPDATE contadorperdidas SET numero = 0";
    $resultGano = mysqli_query($connection, $queryGano);
    if (!$resultGano) {
      die('queryGano Failed.');
    }
  }

  if ($cumple==0) {
    $query = "SELECT numero from contadorperdidas";
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('Query Failed'. mysqli_error($connection));
    }
  
    $json = array();
    while($row = mysqli_fetch_array($result)) {
      $numero =  $row['numero'];
    }

    $numero = $numero+1;
    $queryUpdateNumero = "UPDATE contadorperdidas SET numero = '$numero'";
    $resultUpdateNumero = mysqli_query($connection, $queryUpdateNumero);
    if (!$resultUpdateNumero) {
      die('queryUpdateNumero Failed.');
    }
  }

  echo "pronosticogratuito Update Successfully";  

}

?>
