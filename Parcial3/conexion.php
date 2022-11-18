<?php
$servidor="localhost";
$basedatos="BaseFormulario";
$usuario="root";
$password="";

$con =mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a local host");
$consulta="select * from Empleado";
$registros=mysqli_connect($con,$consulta) or die("Problemas en el select");
$result=mysqli_fetch_all($registros);
mysqli_close($con);
echo json_encode($result);
?>