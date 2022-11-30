<?php

$conn = mysqli_connect("localhost", "root", "root");

if (!$conn) {
    die("Connection failed" . mysqli_connect_errno());
}

$dbCreate = "CREATE DATABASE IF NOT EXISTS baseproyecto";
mysqli_query($conn, $dbCreate);

mysqli_close($conn);
$conn = mysqli_connect("localhost", "root", "root","baseproyecto");

    $query = "CREATE TABLE IF NOT EXISTS avion(
        Id_Nombre varchar(30) AUTO_INCREMENT,
        Name varchar(255) NOT NULL,
        Fabricante varchar(50),
        TipoAvion varchar(20),
        PrimerVuelo date,
        Introduccion date,
        NumConstruidos int,
        CostoProg int,
        CostoUnit int,
        CostoHora int
        
    )";

    mysqli_query($conn, $query);

    
?>