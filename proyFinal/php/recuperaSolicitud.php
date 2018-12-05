<?php
include 'conexion.php';
$idSolicitud = $_GET['idSolicitud'];

$sql = "SELECT *  FROM Solicitud  WHERE id = $idSolicitud";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo json_encode($row);
        break;
    }
} else {
    echo "Error";
}
$conn->close();