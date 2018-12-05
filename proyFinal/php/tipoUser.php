<?php
include 'conexion.php';
$idU = $_POST['idU'];

$sql = "SELECT id_TipoDeUsuario FROM Users WHERE id = $idU";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["id_TipoDeUsuario"];
        break;
    }
} else {
    echo "Error";
}
$conn->close();