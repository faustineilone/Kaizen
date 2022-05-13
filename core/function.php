<?php

function dbConnection() {
    try {
        $dsn = "mysql:host=localhost;dbname=kaizen"; //Data Source Name
        $pdo = new PDO($dsn, "root", "", [3=>1]);
        return $pdo;
    } catch(PDOException $e) {
        return $e;
    }
}