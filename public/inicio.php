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
                    Texto random
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
        <p>Martes 23 de octubre 2024 / 13:30.</p> <p>Nombre de la Estación de rabajo: </p> <p>IP Servidor Gestión:</p>
    </footer>
</body>
</html>