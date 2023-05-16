<?php
    $host = 'localhost';
    $db = 'test';
    $user = 'root';
    $pass = '' ;
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO ($dsn, $user, $pass);
        echo 'Hello Database';
    } catch(PDOExeption $e){
        throw new PDOExeption($e->getMassage());
    }
    ?>