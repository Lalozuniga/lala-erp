<?php
// Incluir el archivo de conexión
require_once '../../config/conexion.php';

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['action'])) {
    $action = $_POST['action'];

    // Verificar si el botón "GENERAR CARTA PORTE" fue presionado
    if ($action === "generate") {
        // Recibe los datos del formulario
        $operador = $_POST['operador'];
        $fecha_salida = $_POST['fecha_salida'];
        $placa_transporte = $_POST['placa_transporte'];
        $hora_salida = $_POST['hora_salida'];
        $modelo = $_POST['modelo'];
        $direccion_destino = $_POST['direccion_destino'];
        $ciudad_origen = $_POST['ciudad_origen'];
        $numero_contacto = $_POST['numero_contacto'];

        try {
            // Inserta los datos en la tabla "carta_porte"
            $sql = "INSERT INTO carta_porte 
                    (operador, fecha_salida, placa_transporte, hora_salida, modelo, direccion_destino, ciudad_origen, numero_contacto) 
                    VALUES (:operador, :fecha_salida, :placa_transporte, :hora_salida, :modelo, :direccion_destino, :ciudad_origen, :numero_contacto)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':operador', $operador);
            $stmt->bindParam(':fecha_salida', $fecha_salida);
            $stmt->bindParam(':placa_transporte', $placa_transporte);
            $stmt->bindParam(':hora_salida', $hora_salida);
            $stmt->bindParam(':modelo', $modelo);
            $stmt->bindParam(':direccion_destino', $direccion_destino);
            $stmt->bindParam(':ciudad_origen', $ciudad_origen);
            $stmt->bindParam(':numero_contacto', $numero_contacto);

            // Ejecutar la consulta
            $stmt->execute();

            echo "Datos guardados correctamente.";
        } catch (PDOException $e) {
            echo "Error al guardar los datos: " . $e->getMessage();
        }
    } else {
        // Si se presionan otros botones (W2, W3, W4)
        echo "Esta funcionalidad aún no está implementada.";
    }
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Debug: verificar si $_POST tiene datos
echo "<pre>";
print_r($_POST);
echo "</pre>";
exit();
?>
