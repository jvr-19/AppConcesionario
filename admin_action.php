<?php
require_once 'db.php';

// Comprobar si se ha enviado el formalario.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Comprobar la accion del formulario.
    $action = $_POST['action'];

    switch ($action) {
        case 'insert':
            // Recoger los datos que vamos a insertar.
            $modelo = $_POST['modelo'];
            $precio = $_POST['precio'];
            $imagen = $_POST['imagen'];
            $color = $_POST['color'];
            $potencia = $_POST['potencia'];

            $query = "INSERT INTO vehiculos (modelo, precio, imagen, color, potencia) VALUES (:modelo, :precio, :imagen, :color, :potencia)";
            $statement = $pdo->prepare($query);
            $statement->bindParam(':modelo', $modelo);
            $statement->bindParam(':precio', $precio);
            $statement->bindParam(':imagen', $imagen);
            $statement->bindParam(':color', $color);
            $statement->bindParam(':potencia', $potencia);
            $statement->execute();

            // Redireccionar después 2seg
            echo "<script>
                setTimeout(function() {
                    alert('Vehículo insertado con éxito.');
                    window.location.href = 'admin.php';
                }, 2000); // 2 seconds delay
              </script>";

            break;

        case 'update':
            // Recoger los datos que vamos a actualizar.
            $modelo = $_POST['modelo'];
            
            // Obtener el precio actual del vehículo para conservar el modelo y la imagen
            $query = "SELECT * FROM vehiculos WHERE modelo = :modelo";
            $statement = $pdo->prepare($query);
            $statement->bindParam(':modelo', $modelo);
            $statement->execute();
            $vehiculo = $statement->fetch(PDO::FETCH_ASSOC);
            
            // Verificar los campos que se han enviado y actualizar solo aquellos que se hayan completado en el formulario
            if (isset($_POST['nuevo_modelo']) && !empty($_POST['nuevo_modelo'])) {
                $nuevo_modelo = $_POST['nuevo_modelo'];
            } else {
                $nuevo_modelo = $vehiculo['modelo']; // Conservar el modelo actual si no hemos puesto un nuevo modelo
            }
            
            if (isset($_POST['nuevo_precio']) && !empty($_POST['nuevo_precio'])) {
                $nuevo_precio = $_POST['nuevo_precio'];
            } else {
                $nuevo_precio = $vehiculo['precio']; // Conservar el precio actual si no hemos puesto un nuevo precio
            }
            
            if (isset($_POST['nueva_imagen']) && !empty($_POST['nueva_imagen'])) {
                $nueva_imagen = $_POST['nueva_imagen'];
            } else {
                $nueva_imagen = $vehiculo['imagen']; // Conservar la imagen actual si no hemos puesto una nueva imagen
            }

            if (isset($_POST['nuevo_color']) && !empty($_POST['nuevo_color'])) {
                $nuevo_color = $_POST['nuevo_color'];
            } else {
                $nuevo_color = $vehiculo['color']; // Conservar la imagen actual si no hemos puesto una nueva imagen
            }

            if (isset($_POST['nueva_potencia']) && !empty($_POST['nueva_potencia'])) {
                $nueva_potencia = $_POST['nueva_potencia'];
            } else {
                $nueva_potencia = $vehiculo['potencia']; // Conservar la imagen actual si no hemos puesto una nueva imagen
            }
            
            // Actualizar los campos en la base de datos
            $query = "UPDATE vehiculos SET modelo = :nuevo_modelo, precio = :nuevo_precio, imagen = :nueva_imagen, color = :nuevo_color, potencia = :nueva_potencia WHERE modelo = :modelo";
            $statement = $pdo->prepare($query);
            $statement->bindParam(':nuevo_modelo', $nuevo_modelo);
            $statement->bindParam(':nuevo_precio', $nuevo_precio);
            $statement->bindParam(':nueva_imagen', $nueva_imagen);
            $statement->bindParam(':nuevo_color', $nuevo_color);
            $statement->bindParam(':nueva_potencia', $nueva_potencia);
            $statement->bindParam(':modelo', $modelo);
            $statement->execute();
            
            // Redireccionar después 2seg
            echo "<script>
                setTimeout(function() {
                    alert('Vehículo actualizado con éxito.');
                    window.location.href = 'admin.php';
                }, 2000); // 2 seconds delay
            </script>";
            
            break;

        case 'delete':
            // Recoger los datos que vamos a borrar.
            $modelo = $_POST['modelo'];

            $query = "DELETE FROM vehiculos WHERE modelo = :modelo";
            $statement = $pdo->prepare($query);
            $statement->bindParam(':modelo', $modelo);
            $statement->execute();

            // Redireccionar después 2seg
            echo "<script>
                setTimeout(function() {
                    alert('Vehículo borrado con éxito.');
                    window.location.href = 'admin.php';
                }, 2000); // 2 seconds delay
              </script>";
            

            break;

        default:
            // Si no es ninguna de las anteriores opciones por defecto mostrar esta alerta.
            echo "<script>
                setTimeout(function() {
                    alert('No he podido realizar nada.');
                    window.location.href = 'admin.php';
                }, 2000); // 2 seconds delay
              </script>";
            break;
    }
}
?>
