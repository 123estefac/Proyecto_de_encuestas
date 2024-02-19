<?php

$conexion=new mysqli("localhost:3306","egalexander","E11223344","formulario");

if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
} 
echo "Conexión exitosa";

?>