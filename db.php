<?php
    $hostDB = '127.0.0.1';
    $nombreDB = 'db_concesionario';
    $usuarioDB = 'root';
    $contrasenyaDB = '';

    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $pdo = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
?>