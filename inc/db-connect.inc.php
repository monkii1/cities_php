<?php
require __DIR__ . '../../../password/password.php';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=php_cities', 'php_cities', $pwd, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch(PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}