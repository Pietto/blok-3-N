<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = 'Planningstool';
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>console.log('Connected successfully');</script>";
    // sql to create table
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
    }
catch(PDOException $e)
    {
    echo "<script>console.log('Connection failed: " . $e->getMessage() , "');</script>";
    }
?>