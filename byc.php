<!doctype html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="img/favicon-32x32.webp" type="image/webp">
    <meta charset="utf-8">
    <title>Concesionario Mercedes</title>
    <script src="https://kit.fontawesome.com/4cb5440775.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body text="#edf0f1">
    <header>
        <a href="index.php" class="icon">
            <img class="mercedes" src="img/favicon-32x32.webp" alt="Mercedes-Benz">
        </a>
        <nav>
            <ul class="navbar">
                <li><a href="index.php">Inicio</a>
                <li><a href="servicios.php">Servicios</a> 
                <li><a href="nt.php"> Nuestras Tiendas</a> 
                <li><a href="contacto.php">Contacto</a> 
                <li><a href="admin.php">Admin</a> 
            </ul>
        </nav>
    </header>
    
    <div class="image-container">
        <img src="img/pexels-photo-120049.webp" width="1915" height="885">
        <div class="text-img-nv">
            <h2>Nuestros vehículos</h2>
        </div>
    </div>

<br><br><br><br><br>
    <div class="grid-vehiculos">
        <?php
            // Incluir el archivo db.php para obtener la configuración de la base de datos
            require_once 'db.php';

            // Query para obtener los vehículos
            $query = "SELECT * FROM vehiculos";
            $statement = $pdo->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();

            // Verificar si se obtuvieron resultados
            if ($statement->rowCount() > 0) {
                // Mostrar los vehículos
                foreach ($result as $fila) {
                    echo '<div class="vehiculos">';
                    echo '<h3 id="modelo">' . $fila['modelo'] . '</h3>';
                    echo '<p><font color="#A7A3A8">desde <u>' . number_format($fila['precio'], 2) . '€</u></font></p>';
                    echo '<a href="compra.php?id=' . $fila['id'] . '" target="_blank"><img src="' . $fila['imagen'] . '"></a>';
                    echo '</div>';
                }
            } else {
                    echo "No se encontraron vehículos.";
            }
        ?>
    </div>

    <br>
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