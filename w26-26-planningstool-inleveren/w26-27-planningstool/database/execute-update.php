<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $time = strip_tags($_POST['time']);
        $players = strip_tags($_POST['players']);
        $teacher = strip_tags($_POST['teacher']);
        $name = $_GET['name'];
	    if(empty($players)||empty($time)||empty($teacher)||empty($name)){
		   echo "<script type='text/javascript'>alert('please fill al requiered fields');</script>";
		}else{
		    $servername = "localhost";
		    $username = "root";
		    $password = "mysql";
		    $dbname = 'Planningstool';

		    try {
		        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		        // set the PDO error mode to exception
		        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		        $sql = "UPDATE plannedgames SET `game` = '$name', `time` = '$time', `teacher`= '$teacher', `players` = '$players' WHERE `id` = $id";
		        // use exec() because no results are returned
		        $conn->exec($sql);
		        echo '<script>console.log("spel '.$name.' succesvol geüpdated");</script>';
		        echo "<script type='text/javascript'>alert('spel \'".$name."\' succesvol geüpdated');</script>";
		        echo "<script>window.open('../planning.php','_self');</script>";
		        }
		    catch(PDOException $e)
		        {
		        echo '<script>console.log("Connection failed: ' . $e->getMessage() . '");</script>';
		        }

		    $conn = null;
		}
    }
?>