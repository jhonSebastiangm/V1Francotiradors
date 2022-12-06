<?php

include '../lib/config.php';

if(isset($_POST['idItemResultado3'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $idItemResultado = $_POST['idItemResultado3'];
  $descripcion = $_POST['desc'];
  $resultadoInicial = $_POST['resultadoInicial'];
  $cumple = $_POST['cumple'];
  $valorFinal = $_POST['valorFinal'];
  $idPronostico = $_POST['idPronostico3'];
  
  $queryInsert = "INSERT INTO resultadoitemspronosticosuperior3 (idItemResultado, descripcion, resultadoInicial, cumple, valorFinal ) VALUES ('$idItemResultado','$descripcion','$resultadoInicial','$cumple','$valorFinal')";
  $resultInsert = mysqli_query($connection, $queryInsert);

  if (!$resultInsert) {
    die('queryInsert Failed.');
  }

  $queryUpdate = "UPDATE itemspronosticosuperior3 SET Estado = 1 WHERE id = '$idItemResultado'";
  $resultUpdate = mysqli_query($connection, $queryUpdate);

  if (!$resultUpdate) {
    die('queryUpdate Failed.');
  }

  echo "Resultado Item Pronostico Superior 3 Agregado Con Exito";  

}

?>
