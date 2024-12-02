<?php
// Verificar estatus de conexión
include('../config/conexion.php');
$estatus_servidor = isset($conn) ? "Conectado" : "Desconectado";
// Obtener la fecha y hora actual
$fecha_actual = date("l, d F Y");
$hora_actual = date("h:i A");
$ip_servidor = $_SERVER['SERVER_ADDR'];
session_start();
$usuario_actual = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "Invitado";
$estacion_trabajo = "Estación Principal"; // Puedes sustituirlo con un valor dinámico si es necesario
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav><p>Estatus conexion a Servidor:<?php echo $estatus_servidor; ?></p> 
        <p><a href="../src/controllers/logout.php">Cerrar sesión</a></p></nav>
    <main>
        <section class="main2">
            <div class="relleno">
                <div class="user">
                    <div class="img-user">
                        <img src="../assets/img/user.png" alt="">
                    </div>
                    
                <div class="form">
                <?php echo $usuario_actual; ?>
                </div>
                </div>
            </div>
            <div class="inicio-img">
                
                <div class="buttons">
                    
                    <button class="accions" onclick="window.location.href='./carta_porte.php'">GENERAR CARTA PORTE A UNIDADES</button>
                    <button class="accions">REPORTE QUINCENAL CARTA PORTE</button>
                    <button class="accions">AGREGAR UNIDAD CARGA</button>
                    <button class="accions">RASTREO DE UNIDADES</button>
                    <button class="accions">REGISTRO DE RUTA Y HORARIO</button>
                    
                </div>
            </div>
            
        </section>

    </main>
    <footer class="bottom-view">
        <p><?php echo $fecha_actual; ?> / <?php echo $hora_actual; ?>.</p> <p>Nombre de la Estación de rabajo: <?php echo $estacion_trabajo; ?></p> <p>IP Servidor Gestión: <?php echo $ip_servidor; ?></p>
    </footer>
</body>
</html>