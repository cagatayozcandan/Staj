<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "crm";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Veritabanı bağlantı hatası: " . $conn->connect_error);
}
?>
