<?php

    include '../lib/config.php';

if(isset($_POST['DescripcionSuperior2'])) {
    $queryObtenerId = "SELECT * FROM pronosticosuperior2 ORDER BY id DESC LIMIT 1";
    $resultObtenerId = mysqli_query($connection, $queryObtenerId);
  
    while($row = mysqli_fetch_array($resultObtenerId)) {
        $idPronosticoSuperior2 = $row['id']; 
    }

    $DescripcionSuperior2 = $_POST['DescripcionSuperior2'];
    $ResutadoSuperior2 = $_POST['ResutadoSuperior2'];
    $queryitemspronosticosuperior2 = "INSERT INTO itemspronosticosuperior2(Descripcion, Resutado, idPronosticoSuperior2) VALUES ('$DescripcionSuperior2', '$ResutadoSuperior2','$idPronosticoSuperior2')";
    $result = mysqli_query($connection, $queryitemspronosticosuperior2);

    if (!$result) {
        die('queryitemspronosticosuperior2 Failed.');
    }

    echo "queryitemspronosticosuperior2 Added Successfully";  

}

?>
