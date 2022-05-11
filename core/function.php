<?php

function dbConnection() {
    try {
        $dsn = "mysql:host=localhost;dbname=kaizen"; //Data Source Name
        $pdo = new PDO($dsn, "root", "");
        return $pdo;
    } catch(PDOException $e) {
        return $e;
    }
}