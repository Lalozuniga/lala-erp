<?php
$host = "localhost";
$dbname = "transport_db";
$username = "root"; // Usuario predeterminado de XAMPP
$password = "";     // Contraseña predeterminada (vacía)

// Intentar conexión
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurar el modo de error de PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Mensaje opcional para confirmar conexión exitosa
    // echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit();
}
?>
