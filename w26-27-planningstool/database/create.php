<!-- <?php
	// $servername = "localhost";
	// $username = "root";
	// $password = "mysql";
	// $dbname = 'Planningstool';

	// // Create connection
	// $conn = new mysqli($servername, $username, $password, $dbname);
	// // Check connection
	// if ($conn->connect_error) {
	//     die("Connection failed: " . $conn->connect_error);
	// } 

	// // sql to create table
	// $sql = "CREATE TABLE MyGuests (
	// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	// firstname VARCHAR(30) NOT NULL,
	// lastname VARCHAR(30) NOT NULL,
	// email VARCHAR(50),
	// reg_date TIMESTAMP
	// )";

	// if ($conn->query($sql) === TRUE) {
	//     echo "Table MyGuests created successfully";
	// } else {
	//     echo "Error creating table: " . $conn->error;
	// }

	// $conn->close();
?> -->


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
		        $sql = "INSERT INTO plannedgames (game, time, teacher, players)
		        VALUES ('$name', '$time', '$teacher','$players')";
		        // use exec() because no results are returned
		        $conn->exec($sql);
		        echo '<script>console.log("spel succesvol gecreëert");</script>';
		        echo "<script type='text/javascript'>alert('spel \ succesvol gecreëert');</script>";
		        echo '<script>window.location.href=\'planning.php\';</script>';	
		        }
		    catch(PDOException $e)
		        {
		        echo '<script>console.log("Connection failed: ' . $e->getMessage() . '");</script>';
		        }

		    $conn = null;
		}
    }
?>