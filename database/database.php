<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'gym';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
    } catch (PDOException $e) {
      die('Error de conexión: '.$e->getMessage());
    }
?>
 