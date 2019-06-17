<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {


	    $time = strip_tags($_POST['time']);
	    $players = strip_tags($_POST['players']);
	    $teacher = strip_tags($_POST['teacher']);
	    $name = $_GET['name'];
    
	    $servername = "localhost";
	    $username = "root";
	    $password = "mysql";
	    $dbname = 'Planningstool';
	    try {
	        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	        // set the PDO error mode to exception
	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "DELETE FROM plannedgames WHERE id = 31;";
	        $conn->exec($sql);
	        echo '<script>console.log("spel '.$name.' succesvol verwijderd");</script>';
	        }
	    catch(PDOException $e)
	        {
	        echo '<script>console.log("Connection failed: ' . $e->getMessage() . '");</script>';
	        }
	    $conn = null;
    }
?>