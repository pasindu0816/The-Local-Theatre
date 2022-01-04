<?php
ob_start();
session_start();

date_default_timezone_set("Asia/Colombo");

try {
    $con = new PDO("mysql:dbname=thelocaltheatre;host=localhost", "root", );
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>