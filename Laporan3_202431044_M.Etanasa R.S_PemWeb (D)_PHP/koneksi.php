<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mahasiswa";

$koneksi = mysqli_connect(hostname: $host, username: $user, password: $pass, database: $db);

if (!$koneksi) {
    die("Koneksi ke MySQL gagal: " . mysqli_connect_error());
}
?>