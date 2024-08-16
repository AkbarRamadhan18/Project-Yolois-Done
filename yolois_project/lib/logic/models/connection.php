<?php
$servername = "localhost"; // Ganti dengan nama server MySQL Anda
$username = "yoloiss"; // Ganti dengan username MySQL Anda
$password = "yoloissGG"; // Ganti dengan password MySQL Anda
$dbname = "yolois_db"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
