<?php
include ("./conexion.php");
$IdNombre = $_POST["IdNombre"];
$consulta = "SELECT * FROM avion where Id_Nombre='$IdNombre'";
$registros = mysqli_query($con,$consulta) or die("Problemas en el select");

$result = mysqli_fetch_array($registros, MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);

?>
