<?php
$servername = "localhost";
$username = "admin";
$password = "omglol19";

try {
    $conn = new PDO("mysql:host=$servername;dbname=tpch", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>