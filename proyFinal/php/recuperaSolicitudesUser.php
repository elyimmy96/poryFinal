<?php
include 'conexion.php';
$idU = $_POST['idU'];

$sql = "SELECT id,(CASE WHEN id_TipoDeSolicitud = 1 THEN 'Indulto' "
        . "WHEN id_TipoDeSolicitud = 2 THEN 'Cambio de Calificacion' "
        . "ELSE 'Err') as TipoSolicitud ,(CASE WHEN b_Aprobada = 1 THEN 'Aprobada' "
        . "WHEN b_Aprobada = 0 THEN 'No Aprobada' "
        . "ELSE 'Sin Atender') as estatus  FROM Solicitud  WHERE id_UserSolicitante = $idU";
$result = $conn->query($sql);

$tabla = "<TABLE><TR><TD>Id Solicitud</TD>
    <TD>Tipo de Solicitud</TD>
    <TD>Estatus</TD>
    <TD>Ir</TD></TR>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tabla = $tabla . "<TR><TD>".$row["id"]."</TD>
            <TD>".$row["TipoSolicitud"]."</TD>
            <TD>".$row["estatus"]."</TD>
            <TD><form action= \".html?idSolicitud=".$row["id"]."\" method= \"get \">
                <input type=\"submit\" value=\"Ir\"/>
            </form></TD></TR>";
        echo $tabla;
        break;
    }
} else {
    echo "Error";
}
$conn->close();