<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav class="nav"><p>Estatus conexion a Servidor:</p> 
    <p>Estatus de Conexion a Servidor:</p> <p>IP servidor Gestion:</p> 
    <p><a href="../src/controllers/logout.php">Cerrar sesión</a></p></nav></nav>
    <main>
    <section class="main2 main-carta">
        <div class="relleno carta">
            <div class="buttons">
                
                <button class="accions">GENERAR CARTA PORTE A UNIDADES</button>
            </div>
            <div class="user user2">
                <div class="img-user">
                    <img src="../assets/img/user.png" alt="">
                </div>
                
            <div class="form">
                Texto random
            </div>
            </div>
        </div>
        <div class="carta-img">
            <div class="formulario">
                <form action="../src/models/guardar_carta.php" method="POST">
                <div class="form1">
                    <div class="form-group">
                        <label for="operador">Operador</label>
                        <input type="text" id="operador" name="operador">
                    </div>

                    <div class="form-group">
                        <label for="fecha_salida">Fecha de salida del transporte</label>
                        <input type="date" id="fecha_salida" name="fecha_salida">
                    </div>

                    <div class="form-group">
                        <label for="placa_transporte">Placa de transporte</label>
                        <input type="text" id="placa_transporte" name="placa_transporte">
                    </div>

                    <div class="form-group">
                        <label for="hora_salida">Hora de salida del Transporte</label>
                        <input type="time" id="hora_salida" name="hora_salida">
                    </div>

                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" id="modelo" name="modelo">
                    </div>

                    <div class="form-group">
                        <label for="direccion_destino">Dirección de destino</label>
                        <input type="text" id="direccion_destino" name="direccion_destino">
                    </div>

                    <div class="form-group">
                        <label for="ciudad_origen">Ciudad Origen</label>
                        <input type="text" id="ciudad_origen" name="ciudad_origen">
                    </div>

                    <div class="form-group">
                        <label for="numero_contacto">Número de contacto</label>
                        <input type="text" id="numero_contacto" name="numero_contacto">
                    </div>


                </div>
                <div class="buttons1">
                    <!-- Imagenes como botones -->
                    <button type="submit" name="action" value="generate" class="img-button">
                        <img src="../assets/img/W1.png" alt="Generar Carta Porte">
                    </button>
                    <button type="submit" name="action" value="print" class="img-button">
                        <img src="../assets/img/W2.png" alt="Imprimir">
                    </button>
                    <button type="submit" name="action" value="other1" class="img-button">
                        <img src="../assets/img/W3.png" alt="Opción 3">
                    </button>
                    <button type="submit" name="action" value="other2" class="img-button">
                        <img src="../assets/img/W4.png" alt="Opción 4">
                    </button>
                </div>
                </form>
            </div>
            
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Operador</th>
                            <th>Placa de transporte</th>
                            <th>Modelo</th>
                            <th>Fecha de Salida</th>
                            <th>Hora de Salida del transporte</th>
                            <th>Dirección de Destino</th>
                            <th>Número de Contacto</th>
                            <th>Ciudad Origen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí se imprimirán los datos de la base de datos -->
                        <?php
                        // Incluir la conexión y la función de mostrar los datos
                        include('../config/conexion.php');
                        include('../src/controllers/show_data.php');
                        
                        // Llamar a la función que imprime los datos
                        mostrarDatos();
                        ?>
                    </tbody></table>

            </div>

            <div class="print">
                <img src="../assets/img/print.png" alt="">
                <button>Imprimir carta porte</button>
            </div>
            
        </div>
        
        
    </section>

</main>
    <footer class="bottom-view">
        <p>Martes 23 de octubre 2024 / 13:30.</p>
    </footer>
</body>
</html>