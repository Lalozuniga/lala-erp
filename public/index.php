<?php
// Verificar estatus de conexión
include('../config/conexion.php');
$estatus_servidor = isset($conn) ? "Conectado" : "Desconectado";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <section class="main">
        <div class="relleno"></div>
        <div class="main-img">
            <!-- Formulario para iniciar sesión -->
            <form action="../src/controllers/login.php" method="POST">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" required>

                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" required>
                
                <button type="submit">Login</button>
            </form>
            <div class="text-img">
                <h1>ERP.SCTL <span style="color: rgb(255, 255, 255);">V1.0</span></h1>
                <h4>Sistema de Gestión para el control de Transporte y Logística</h4>
                
                <img src="../assets/img/curva-footer.png" alt="" class="curva-footer">
            </div>
        </div>
    </section>
    
    <footer class="bottom-view">
        <p>Martes 23 de octubre 2024 / 13:30.</p> <p>Nombre de la Estación de Trabajo: </p>
    </footer>
</body>
</html>
