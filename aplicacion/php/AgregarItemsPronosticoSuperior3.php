<?php

    include '../lib/config.php';

if(isset($_POST['DescripcionSuperior3'])) {
    $queryObtenerId = "SELECT * FROM pronosticosuperior3 ORDER BY id DESC LIMIT 1";
    $resultObtenerId = mysqli_query($connection, $queryObtenerId);
  
    while($row = mysqli_fetch_array($resultObtenerId)) {
        $idPronosticoSuperior3 = $row['id']; 
    }

    $DescripcionSuperior3 = $_POST['DescripcionSuperior3'];
    $ResutadoSuperior3 = $_POST['ResutadoSuperior3'];
    $queryitemspronosticosuperior3 = "INSERT INTO itemspronosticosuperior3(Descripcion, Resutado, idPronosticoSuperior3) VALUES ('$DescripcionSuperior3', '$ResutadoSuperior3','$idPronosticoSuperior3')";
    $result = mysqli_query($connection, $queryitemspronosticosuperior3);

    if (!$result) {
        die('queryitemspronosticosuperior3 Failed.');
    }

    echo "queryitemspronosticosuperior3 Added Successfully";  

}

?>
