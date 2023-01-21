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
  
  $queryInsert = "INSERT INTO resultadoitemspronosticobasico (idItemResultado, descripcion, resultadoInicial, cumple, valorFinal, idPronostico) VALUES ('$idItemResultado','$descripcion','$resultadoInicial','$cumple','$valorFinal','$idPronostico')";
  $resultInsert = mysqli_query($connection, $queryInsert);

  if (!$resultInsert) {
    die('queryInsert Failed.');
  }

  $queryUpdate = "UPDATE itemspronosticobasico SET Estado = 1 WHERE id = '$idItemResultado'";
  $resultUpdate = mysqli_query($connection, $queryUpdate);

  if (!$resultUpdate) {
    die('queryUpdate Failed.');
  }

  echo "Resultado Item Pronostico Basico Agregado Con Exito";  

}

?>
