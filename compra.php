<?php
    include_once 'db.php';
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $vehiculo_id = $_POST['vehiculo_id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        // Insertar los datos en la base de datos
        $query = "INSERT INTO compras (vehiculo_id, nombre, email, telefono, mensaje) VALUES (?, ?, ?, ?, ?)";
        $statement = $pdo->prepare($query);
        $statement->execute(array($vehiculo_id, $nombre, $email, $telefono, $mensaje));

        // Redireccionar después 2seg
        echo "<script>
                setTimeout(function() {
                    alert('Compra realizada con éxito, te enviaremos más información sobre la fecha de entrega a tu correo: $email');
                    window.location.href = 'compra.php?id=$vehiculo_id';
                }, 2000); // 2 seconds delay
              </script>";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" href="img/favicon-32x32.webp" type="image/webp">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Vehículo</title>
    <script src="https://kit.fontawesome.com/4cb5440775.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body{
            background-image: url('img/contacto.avif');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        footer.site-footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.html" class="icon">
            <img class="mercedes" src="img/favicon-32x32.webp" alt="Mercedes-Benz">
        </a>
        <nav>
            <ul class="navbar">
                <li><a href="index.php">Inicio</a>
                <li><a href="byc.php">Buscar y comprar</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="nt.php">Nuestras Tiendas</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>

    <br><br>

    <div class="container-compra">
        <div class="info-compra">
            <h1>Detalles del Vehículo</h1>
                <?php
                    // Verificar si se ha recibido el ID del vehículo seleccionado
                    if (isset($_GET['id'])) {
                        $vehiculo_id = $_GET['id'];

                        // Consultar la base de datos para obtener los detalles del vehículo
                        $query = "SELECT * FROM vehiculos WHERE id = :id";
                        $statement = $pdo->prepare($query);
                        $statement->execute(['id' => $vehiculo_id]);

                        if ($statement->rowCount() > 0) {
                            
                            $vehiculo = $statement->fetch(PDO::FETCH_ASSOC);
                            echo '<div class="vehiculo">';
                            echo '<h2>' . $vehiculo['modelo'] . '</h2>';
                            echo '<img src="' . $vehiculo['imagen'] . '" alt="' . $vehiculo['modelo'] . '">';
                            echo '<p>Precio: ' . number_format($vehiculo['precio'], 2) . '€</p>';
                            echo '<p>Color: ' . $vehiculo['color'] . '</p>';
                            echo '<p>Potencia: ' . $vehiculo['potencia'] . 'kW' . '</p>';
                            echo '</div>';
                        } else {
                            echo '<p>No se encontró el vehículo seleccionado.</p>';
                        }
                    } else {
                        echo '<p>No has elegido ningún vehículo.</p>';
                    }
                ?>
        </div>

        <div class="form-compra">
            <h1>Completa tu Compra</h1>
            <form method="POST">
                <input type="hidden" name="vehiculo_id" value="<?php echo $vehiculo_id ?? ''; ?>">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre..." required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Introduce tu email..." required>
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" placeholder="Introduce tu numero de telefono..." required>
                <label for="mensaje">Mensaje (opcional):</label>
                <textarea id="mensaje" name="mensaje" placeholder="Introduce un mensaje..."></textarea>
                <button type="submit">Comprar Ahora</button>
            </form>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container-footer">
            <div class="footer-info">
                <h3>Sobre este sitio</h3>
                <p>Mercedes-Benz AG.</p>
            </div>
            <div class="footer-contact">
                <h3>Contacto</h3>
                <p>Email: atencionclientes@mercedes-benz.com</p>
                <p>Teléfono: 900 170 170</p>
            </div>
            <div class="footer-social">
                <h3>Redes Sociales</h3>
                <div class="redes-sociales">
                    <a href="https://www.facebook.com/MercedesBenzEspana" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="https://twitter.com/MBenzEspana" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
                    <a href="https://www.youtube.com/user/MercedesBenzSpain" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
