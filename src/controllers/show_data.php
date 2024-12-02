<?php
include("../../config/conexion.php");

// Función para mostrar los datos de la base de datos en la tabla
function mostrarDatos() {
    global $conn;

    // Consulta SQL para obtener los datos
    $query = "SELECT * FROM carta_porte";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // Obtener los resultados
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Imprimir las filas de la tabla con una columna para seleccionar
    foreach ($result as $fila) {
        echo "<tr>";
        echo "<td><input type='radio' name='registro_seleccionado' value='" . htmlspecialchars($fila['id']) . "'></td>";
        echo "<td>" . htmlspecialchars($fila['id']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['operador']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['placa_transporte']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['modelo']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['fecha_salida']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['hora_salida']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['direccion_destino']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['numero_contacto']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['ciudad_origen']) . "</td>";
        echo "</tr>";
    }
}
