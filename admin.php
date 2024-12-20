<!doctype html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="img/favicon-32x32.webp" type="image/webp">
    <meta charset="utf-8">
    <title>Concesionario Mercedes</title>
    <style>
        body{
            background-image: url('img/admin2.jpeg');
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
    <script src="https://kit.fontawesome.com/4cb5440775.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <a href="index.php" class="icon">
            <img class="mercedes" src="img/favicon-32x32.webp" alt="Mercedes-Benz">
        </a>
        <nav>
            <ul class="navbar">
                <li><a href="index.php">Inicio</a>
                <li><a href="byc.php">Buscar y comprar</a> 
                <li><a href="servicios.php">Servicios</a> 
                <li><a href="nt.php"> Nuestras Tiendas</a> 
                <li><a href="contacto.php">Contacto</a>
            </ul>
        </nav>
    </header>

    <br><br><br>

    <div class="container-admin">
        <div class="form-admin">
            <h2>Insertar:</h2>
            <form method="POST" action="admin_action.php">
                <input type="hidden" name="action" value="insert">
                <label for="modelo">Modelo de Vehículo:</label>
                <input type="text" id="modelo" name="modelo" placeholder="Introduce el modelo..." required>

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Introduce el precio..." required>

                <label for="imagen">Imagen:</label>
                <input type="text" id="imagen" name="imagen" placeholder="Introduce la URL de la imagen..." required>

                <label for="color">Color:</label>
                <input type="text" id="color" name="color" placeholder="Introduce el color..." required>

                <label for="potencia">Potencia:</label>
                <input type="number" id="potencia" name="potencia" placeholder="Introduce la potencia..." required>

                <div class="botones-formu">
                    <button type="submit">Enviar</button>
                    <button type="reset">Resetear</button>
                </div>
            </form>
        </div>

        <div class="form-admin">
            <h2>Actualizar</h2>
            <form method="POST" action="admin_action.php">
                <input type="hidden" name="action" value="update">
                <label for="modelo">Modelo de Vehículo:</label>
                <input type="text" id="modelo" name="modelo" placeholder="Introduce el modelo..." required>

                <label for="nuevo_modelo">Nuevo Modelo:</label>
                <input type="text" id="nuevo_modelo" name="nuevo_modelo" placeholder="Introduce el nuevo modelo...">

                <label for="nuevo_precio">Nuevo Precio:</label>
                <input type="number" id="nuevo_precio" name="nuevo_precio" placeholder="Introduce el nuevo precio...">

                <label for="nueva_imagen">Nueva Imagen:</label>
                <input type="text" id="nueva_imagen" name="nueva_imagen" placeholder="Introduce la URL de la nueva imagen...">

                <label for="nuevo_color">Nuevo Color:</label>
                <input type="text" id="nuevo_color" name="nuevo_color" placeholder="Introduce el color...">

                <label for="nueva_potencia">Nueva Potencia:</label>
                <input type="number" id="nueva_potencia" name="nueva_potencia" placeholder="Introduce la potencia...">


                <div class="botones-formu">
                    <button type="submit">Enviar</button>
                    <button type="reset">Resetear</button>
                </div>
            </form>
        </div>

        <div class="form-admin">
            <h2>Eliminar</h2>
            <form method="POST" action="admin_action.php">
                <input type="hidden" name="action" value="delete">
                <label for="modelo">Modelo de Vehículo:</label>
                <input type="text" id="modelo" name="modelo" placeholder="Introduce el modelo..." required>

                <div class="botones-formu">
                    <button type="submit">Enviar</button>
                    <button type="reset">Resetear</button>
                </div>
            </form>
        </div>
    </div>
    
    <br><br><br><br>

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