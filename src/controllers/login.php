<?php
session_start(); // Iniciar sesión

// Incluir el archivo de conexión a la base de datos
include('../../config/conexion.php');
// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validar que los campos existan
    if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
        // Obtener los datos del formulario
        $usuario = trim($_POST['usuario']);
        $contrasena = trim($_POST['contrasena']);

        try {
            // Consulta para verificar si el usuario existe en la base de datos
            $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':contrasena', $contrasena);
            $stmt->execute();

            // Si el usuario existe, crear una sesión y redirigir
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                
                // Guardar los datos del usuario en la sesión
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['usuario'] = $user['usuario'];

                // Redirigir a inicio.html si las credenciales son correctas
                header('Location: ../../public/inicio.php');
                exit();
            } else {
                // Si no se encuentra el usuario, mostrar un error
                $error = "Usuario o contraseña incorrectos.";
            }
        } catch (PDOException $e) {
            // Manejar errores de la base de datos
            $error = "Error en la base de datos: " . $e->getMessage();
        }
    } else {
        $error = "Todos los campos son obligatorios.";
    }
}
?>

<!-- Mostrar error si es necesario -->
<?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
