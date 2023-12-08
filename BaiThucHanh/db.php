<?php
$username   = 'root';
$password   = '';
$database   = 'baithuchanhm3';
try {
    $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (Exception $e) {
    echo '<h1>Khong the ket noi CSDL</h1>';
}