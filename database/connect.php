<?php
// session_start();
date_default_timezone_set('Asia/Bangkok');
$servername = "localhost";
$username = "Mughorth_Mugh";
$password = "f6e64gq6";
// Mughorth_Mugh
// f6e64gq6

try {
    $conn = new PDO("mysql:host=$servername;dbname=Mughorth_database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: "
        . $e->getMessage();
}
