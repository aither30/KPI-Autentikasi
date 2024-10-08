<?php
// Koneksi ke database MySQL
$host = 'localhost';  // Nama host
$dbname = 'nama_database';  // Nama database
$username = 'root';  // Username MySQL (biasanya root di localhost)
$password = '';  // Password MySQL (kosong secara default di XAMPP)

// Membuat koneksi
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Mengatur mode error PDO agar error ditampilkan sebagai Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi berhasil ke database!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
