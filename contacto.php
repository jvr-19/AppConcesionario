<!doctype html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="img/favicon-32x32.webp" type="image/webp">
    <meta charset="utf-8">
    <title>Concesionario Mercedes</title>
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
        <a href="index.php" class="icon">
            <img class="mercedes" src="img/favicon-32x32.webp" alt="Mercedes-Benz">
        </a>
        <nav>
            <ul class="navbar">
                <li><a href="index.php">Inicio</a>
                <li><a href="byc.php">Buscar y comprar</a> 
                <li><a href="servicios.php">Servicios</a> 
                <li><a href="nt.php"> Nuestras Tiendas</a> 
                <li><a href="admin.php">Admin</a> 
            </ul>
        </nav>
    </header>

    <br><br><br><br>

    <div class="container-formu">
        <div class="info-contacto">
            <h2>Ubicación:</h2>
            <p>Polígono Industrial Arroyo de la Vega<br>
                Avda. Bruselas, 30<br>
                28108 ALCOBENDAS, Madrid </p>
            
            <h2>Síguenos:</h2>
            <div class="redes-sociales">
                <a href="https://www.facebook.com/MercedesBenzEspana" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://twitter.com/MBenzEspana" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
                <a href="https://www.youtube.com/user/MercedesBenzSpain" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        
        <div class="formulario">
            <h2>Formulario de Contacto</h2>
            <form method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre..." required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Introduce tu email..." required>
                
                <label for="modelo">Modelo de Vehículo:</label>
                <select id="modelo" name="modelo">
                    <option value="modelo1">EQE</option>
                    <option value="modelo2">EQS</option>
                    <option value="modelo3">Clase A</option>
                    <option value="modelo4">Clase C</option>
                    <option value="modelo5">Clase E</option>
                    <option value="modelo6">Clase S</option>
                </select>
                
                <label for="pais">País:</label>
                <input type="text" id="pais" name="pais" placeholder="Introduce tu país..." required>
                
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" rows="4" placeholder="Escribe una descripcion sobre tu problema..." required></textarea>
                
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