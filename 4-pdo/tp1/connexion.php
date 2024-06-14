<?php
try {
    $dsn = 'mysql:host=localhost;dbname=tp;charset=utf8mb4';
    $pdo = new PDO($dsn, 'root', '');
    echo 'Connexion réussie';
}
catch (PDOException $e) {
    $msg = 'Erreur PDO dans '.$e->getFile().' : '.$e->getLine().' : '.$e->getMessage();
    die($msg);
}
?>