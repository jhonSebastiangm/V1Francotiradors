<?php

include '../configuracion/config.php';

if(isset($_POST['idItemResultado'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $idItemResultado = $_POST['idItemResultado'];
  $descripcion = $_POST['desc'];
  $resultadoInicial = $_POST['resultadoInicial'];
  $cumple = $_POST['cumple'];
  $valorFinal = $_POST['valorFinal'];
  $idPronostico = $_POST['idPronostico'];
  
  $queryInsert = "INSERT INTO resultadoitemspronosticobasico (idItemResultado, descripcion, resultadoInicial, cumple, valorFinal ) VALUES ('$idItemResultado','$descripcion','$resultadoInicial','$cumple','$valorFinal')";
  $resultInsert = mysqli_query($connection, $queryInsert);

  if (!$resultInsert) {
    die('queryInsert Failed.');
  }

  $queryUpdate = "UPDATE itemspronosticobasico SET Estado = 1 WHERE id = '$idItemResultado'";
  $resultUpdate = mysqli_query($connection, $queryUpdate);

  if (!$resultUpdate) {
    die('queryUpdate Failed.');
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

  echo "Resultado Item Pronostico Basico Agregado Con Exito";  

}

?>
