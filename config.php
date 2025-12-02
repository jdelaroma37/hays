<?php
// config.php

$host = 'localhost';
$db   = 'barangay_db';
$user = 'root';
$pass = ''; // leave blank if you're using XAMPP default

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
