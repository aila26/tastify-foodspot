<?php
$host = "localhost";
$db = "foodspot";
$user = "root";
$password = "";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Untuk memberitahu informasi error
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //mengembalikan array assosiatif
    PDO::ATTR_EMULATE_PREPARES => false //mengatur siapa yang eksekusi sistem prepare
];

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

$options = [
    PDO :: ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION,
    PDO :: ATTR_DEFAULT_FETCH_MODE => PDO :: FETCH_ASSOC,
    PDO :: ATTR_EMULATE_PREPARES => false
];

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $error) {
    die("Koneksi ke database gagal: " . $error->getMessage());
}
