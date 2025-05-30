<?php
// $host = '127.0.0.1';
// $db = 'bloodwellnessaccount';
// $user = 'root';
// $pass = ''; 

$host = 'db'; // Ganti dari 127.0.0.1 ke nama service di docker-compose
$db = 'bloodwellnessaccount';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}



