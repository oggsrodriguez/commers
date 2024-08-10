<?php
$servidor = "45.228.233.78";
$usuario = "oscrod89_commers";
$contraseña = "CbTl45226154";
$base_de_datos = "oscrod89_commers";

// Crea la conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";

// Aquí puedes ejecutar consultas SQL utilizando $conn

// Cierra la conexión
$conn->close();
?>
