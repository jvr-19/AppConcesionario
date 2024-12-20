# Gestión de Concesionario de Coches

Una aplicación web diseñada para la gestión eficiente de un concesionario de coches. Este proyecto incluye un panel CRUD que permite la introducción, edición, eliminación y visualización de registros de vehículos.

## 🚀 Características

- **Gestión CRUD completa**: Crear, leer, actualizar y eliminar registros de vehículos.
- **Interfaz intuitiva**: Diseñada para facilitar la interacción con la base de datos.
- **Base de datos robusta**: Gestión eficiente y segura de los datos con MySQL.
- **Tecnologías modernas**: Uso de PHP para el backend, JavaScript para la lógica de cliente y CSS para un diseño atractivo.

## 🛠️ Herramientas Utilizadas

- **Backend**: PHP
- **Frontend**: JavaScript, CSS
- **Base de Datos**: MySQL

## 📋 Requisitos Previos

Antes de comenzar, asegúrate de tener instalado lo siguiente:

- **Servidor Web**: Apache, Nginx u otro servidor compatible con PHP.
- **PHP**: Versión 7.4 o superior.
- **MySQL**: Versión 5.7 o superior.
- **Navegador Web**: Cualquier navegador.

## 🛑 Instalación

1. Clona el repositorio en tu máquina local:

   ```bash
   git clone https://github.com/jvr-19/AppConcesionario.git
   ```
2. Configura la base de datos:

Crea una base de datos en MySQL.
Importa el archivo coches.sql ubicado en el proyecto.

3. Configura la base de datos:

   - Crea una base de datos en MySQL.
   - Importa el archivo `coches.sql` ubicado en el directorio raíz del proyecto:

     ```bash
     mysql -u usuario -p nombre_base_datos < coches.sql
     ```

4. Configura los parámetros de conexión a la base de datos:

   - Edita el archivo `db.php` y ajusta los valores con las credenciales de tu servidor MySQL:

     ```php
     $hostDB = '127.0.0.1'; // Servidor de base de datos
     $hostDB = 'nombre_base_datos'; // Nombre de la base de datos
     $hostDB = 'usuario'; // Usuario de MySQL
     $hostDB = 'contraseña'; // Contraseña de MySQL
     ```

5. Inicia tu servidor web y accede al directorio del proyecto en tu navegador, utilizando una URL como:

   ```plaintext
   http://localhost/AppConcesionario
   ```