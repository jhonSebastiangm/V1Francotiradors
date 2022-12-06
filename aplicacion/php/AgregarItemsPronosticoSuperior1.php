<?php

    include '../lib/config.php';

if(isset($_POST['DescripcionSuperior1'])) {
    $queryObtenerId = "SELECT * FROM pronosticosuperior1 ORDER BY id DESC LIMIT 1";
    $resultObtenerId = mysqli_query($connection, $queryObtenerId);
  
    while($row = mysqli_fetch_array($resultObtenerId)) {
        $idPronosticoSuperior1 = $row['id']; 
    }

    $Descripcion = $_POST['DescripcionSuperior1'];
    $Resutado = $_POST['ResutadoSuperior1'];
    $queryitemspronosticosuperior1 = "INSERT INTO itemspronosticosuperior1 (Descripcion, Resutado, idPronosticoSuperior1) VALUES ('$Descripcion', '$Resutado','$idPronosticoSuperior1')";
    $result = mysqli_query($connection, $queryitemspronosticosuperior1);

    if (!$result) {
        die('queryitemspronosticosuperior1 Failed.');
    }

    echo "queryitemspronosticosuperior1 Added Successfully";  

}

?>
