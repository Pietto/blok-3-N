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
		      		<li class="active"><a href="plannen.php">Inplannen</a></li>
		      		<li><a href="planning.php">Planning bekijken</a></li>
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
		    $sql = "SELECT url, youtube, image, min_players, max_players, play_minutes, explain_minutes, description, name, id FROM games";
		    $stmt = $conn->prepare($sql);
		    $stmt->execute();

		    while ($data = $stmt->fetch())
		        echo '<div class="card">'
		            .'<img class="card-img-top" src="../afbeeldingen/'.$data["image"].'"  alt="logo">'
		            .'<div class="card-body">'
		            .'<h1 class="card-title">'.$data['name'].'</h5>'
		            .'<br>'
		            .'<p class="card-title"><b>Aantal spelers: </b>'.$data["min_players"].' - '.$data["max_players"].'</p>'
		            .'<p class="card-title"><b>Beschrijving:</b></p>'
		            .$data["description"]
		            .'<a target="_blank" href="'.$data["url"].'">Meer informatie</a></br></br>'
		            .$data["youtube"].'<br><br>'
		            .'<a href="plannen.php?name='.$data["name"].'" class="btn btn-primary">'.'Add game'.'</a></form>'
		            .'</div>'
		            .'</div>';
		?>
	</div>


	<div id='footer'>
		<h1>Pieterjan van Dijk &copy;<?php echo date("Y"); ?>.</h1>
	</div>

	<?php
		include 'database/connect.php';
	?>
	<script src="plannen.js"></script>

</body>
</html>