<?php

$servername = "localhost"; // Nombre del servidor
$username = "root"; // Nombre de usuario de la base de datos
$password = "root1234"; // Contraseña del usuario de la base de datos
$dbname = "clientes_usuarios"; // Nombre de la base de datos

// Crear la conexión a la base de datos
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

else {echo "Conexión exitosa a la base de datos.";} // esta plena arroja este resultado

// Establecer el conjunto de caracteres a UTF-8 (opcional, pero recomendado)
$conexion->set_charset("utf8");




