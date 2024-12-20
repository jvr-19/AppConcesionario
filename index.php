<html lang="es">
<head>
    <link rel="shortcut icon" href="img/favicon-32x32.webp" type="image/webp">
    <meta charset="utf-8">
    <title>Concesionario Mercedes</title>
    <script src="https://kit.fontawesome.com/4cb5440775.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body vlink="#F34545" alink="#1E7EF1" link="#0ECB50">
    <header>
        <a href="index.html" class="icon">
            <img class="mercedes" src="img/favicon-32x32.webp" alt="Mercedes-Benz">
        </a>
        <nav>
            <ul class="navbar">
                <li><a href="byc.php">Buscar y comprar</a>
                <li><a href="servicios.php">Servicios</a>
                <li><a href="nt.php"> Nuestras Tiendas</a>
                <li><a href="contacto.php">Contacto</a>
                <li><a href="admin.php">Admin</a> 
            </ul>
        </nav>
    </header>
                <div class="image-container">
                    <img src="img/EQ-Stage.avif" width="1915" height="885">
                    <div class="text-img">
                        <h2>EQA 250 +<br>por 395€/mes.</h2>
                        <p>395€/mes en 48 cuotas.<br>Entrada: 14.672,00 €<br>Cuota final: 34.438,98 €</p>
                        <a href="https://www.mercedes-benz.es/passengercars/campaigns/eqa.html" target="_blank"><button class="btn-ver-oferta">Ver Oferta</button></a>
                    </div>
                </div>

    <br><br><br><br><br>
    
    <h1 class="title">Nuestras recomendaciones</h1>
    <div class="recomendaciones-grid">
        <div class="recomendaciones">
            <img src="img/amg-glccoupe.avif" width="382" height="286.5" class="img-sombra">
            <h3>Nuevo Mercedes-AMG GLC Coupé</h3>
            <p style="color: #A7A3A8">Disponible próximamente.</p>
            <a href="https://www.mercedes-benz.es/passengercars/models/suv/new/glc-coupe-amg.html" target="_blank"><button class="btn-ver-oferta">Ver Oferta</button></a>
        </div>
        <div class="recomendaciones">
            <img src="img/amg_gt_coupe.avif" width="382" height="286.5" class="img-sombra">
            <h3>Nuevo Mercedes-AMG GT Coupé</h3>
            <p style="color: #A7A3A8">Disponible próximamente.</p>
            <a href="https://www.mercedes-benz.es/passengercars/models/coupe/amg-gt/overview.html" target="_blank"><button class="btn-ver-oferta">Ver Oferta</button></a>
        </div>
        <div class="recomendaciones">
            <img src="img/amg_glc.avif" width="382" height="286.5" class="img-sombra">
            <h3>Nuevo Mercedes-AMG GLC</h3>
            <p style="color: #A7A3A8">Disponible próximamente.</p>
            <a href="https://www.mercedes-benz.es/passengercars/models/suv/new/glc-amg.html" target="_blank"><button class="btn-ver-oferta">Ver Oferta</button></a>
        </div>
        <div class="recomendaciones">
            <img src="img/gla.avif" width="382" height="286.5" class="img-sombra">
            <h3>GLA Híbrido Enchufable</h3>
            <p style="color: #A7A3A8">77 km de autonomía. Con cargador e instalación de regalo.</p>
            <a href="https://www.mercedes-benz.es/passengercars/models/suv/gla/overview.html" target="_blank"><button class="btn-ver-oferta">Ver Oferta</button></a>
        </div>
    </div>

    <br><br><br>

    <a id="nv"></a>
    <h1 class="title">Nuestros vehículos</h1>
        <div class="grid-vehiculos">
            <?php
                // Incluir el archivo db.php para obtener la configuración de la base de datos
                require_once 'db.php';

                // Query para obtener los 6 primeros vehículos
                $query = "SELECT * FROM vehiculos LIMIT 6";
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

    <br><br><br>

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