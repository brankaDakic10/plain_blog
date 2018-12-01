<?php
$servername = "localhost";
$username = 'root';
$password = "";
$dbname = "plainBlog";

// Create connection
try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

