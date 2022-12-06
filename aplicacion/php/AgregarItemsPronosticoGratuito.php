<?php

    include '../lib/config.php';

if(isset($_POST['Descripcion'])) {
    $queryObtenerId = "SELECT * FROM pronosticogratuito ORDER BY id DESC LIMIT 1";
    $resultObtenerId = mysqli_query($connection, $queryObtenerId);
  
    while($row = mysqli_fetch_array($resultObtenerId)) {
        $idPronosticoGratuito = $row['id']; 
    }

    $Descripcion = $_POST['Descripcion'];
    $Resutado = $_POST['Resutado'];
    $queryitemspronosticogratuito = "INSERT INTO itemspronosticogratuito(Descripcion, Resutado, idPronosticoGratuito) VALUES ('$Descripcion', '$Resutado','$idPronosticoGratuito')";
    $result = mysqli_query($connection, $queryitemspronosticogratuito);

    if (!$result) {
        die('queryitemspronosticogratuito Failed.');
    }

    echo "queryitemspronosticogratuito Added Successfully";  

}

?>
