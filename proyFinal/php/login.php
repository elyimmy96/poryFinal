<?php
include 'conexion.php';
$clave = $_POST['c_clave'];
$verif = $_POST['c_verif'];
$pwd = $_POST['password'];

$sql = "SELECT id FROM Users WHERE c_Clave = '$clave' and c_Verificador = '$verif' and password = md5('$pwd')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["id"];
        break;
    }
} else {
    echo "Error";
}
$conn->close();