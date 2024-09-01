<?php

    $host = 'localhost';
    $dbname = 'web_project';
    $dbusername = 'root';
    $dbpassword = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;",$dbusername,$dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("connection failed" . $e->getMessage());    // terminate the script if some goes wrong
    }

    




