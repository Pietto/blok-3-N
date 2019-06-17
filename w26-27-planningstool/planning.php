<!DOCTYPE html>
<html>
<head>
	<title>Plannings tool</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="tool.css">
</head>
<body>
	<script src="plannen.js"></script>

	<div id='top'>
		<div id='header'>
			<h1>Planningstool</h1>
			<h2>Plannen</h2>
		</div>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
		    	<div class="navbar-header">
		      		<a class="navbar-brand" href="#">Plannings tool</a>
		    	</div>
		    	<ul class="nav navbar-nav">
		      		<li><a href="tool.php">Home</a></li>
		      		<li><a href="plannen.php">Inplannen</a></li>
		      		<li class="active"><a href="planning.php">Planning bekijken</a></li>
		    	</ul>
		    	<button class="btn btn-danger navbar-btn"><a href='https://www.youtube.com/watch?v=fC0ZxCqw0pA' target="blank">Help</a></button>
		  	</div>
		</nav>
	</div>

	<div id='content'>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "mysql";
			$dbname = 'Planningstool';
		    try {
		        $conn = new PDO("mysql:host=$servername;dbname=planningstool", $username, $password);
		        // set the PDO error mode to exception
		        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    }
		    catch(PDOException $e){
		        echo $sql . "<br>" . $e->getMessage();
		    }
		    $sql = "SELECT id, game, time, teacher, players FROM plannedgames";
		    $stmt = $conn->prepare($sql);
		    $stmt->execute();

		    while ($data = $stmt->fetch())
		        echo "<div class='card'>"
		    	.'<h1 id="gamename">'.$data['game'].'</h1>'
		    	.'<img alt="alt" src="../afbeeldingen/7_wonders.jpg">'
		    	."</div>";
		?>
	</div>


	<div id='footer'>
		<h1>Pieterjan van Dijk &copy;<?php echo date("Y"); ?>.</h1>
	</div>
</body>
</html>