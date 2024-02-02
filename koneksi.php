<?php
// membuat koneksi database
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_psb';

$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}


?>