<?php // Configuración de la conexión a la base de datos MySQL
$host = "127.0.0.1"; // Usar IP local en lugar de 'localhost' para evitar problemas de resolución de nombres en algunos entornos
$user = "root"; // Usuario de la base de datos, corregido a 'root' según tu configuración de HeidiSQL
$password = ""; // Contraseña de la base de datos
$database = "tiendabd"; // Nombre de la base de datos, corregido según tu HeidiSQL
$port = 3306;           // Puerto de conexión, definido como entero por buena práctica

try {
$conn = new mysqli($host, $user, $password, $database, $port); // Creación de conexión con manejo de errores
} catch (mysqli_sql_exception $e) {
    die("Error de conexión: " . $e->getMessage()); // Mensaje de error detallado para depuración
}
?>     