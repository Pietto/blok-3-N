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
		    $sql = "SELECT id, game, time, teacher, players FROM plannedgames ORDER BY time";
		    $stmt = $conn->prepare($sql);
		    $stmt->execute();

		    while ($data = $stmt->fetch())
		        echo "<div class='card'>"
		    	.'<h1 id="gamename">'.$data['game'].'</h1>'
		    	.'<p><b>geplande begintijd: </b>'.$data['time'].'</p>'
		    	.'<p><b>spelers: </b>'.$data['players'].'</p>'
		    	.'<p><b>uitlegger: </b>'.$data['teacher'].'</p>'
		    	.'<a href="database/update.php?name='.$data["game"].'&time='.$data["time"].'&teacher='.$data["teacher"].'&players='.$data["players"]."&id=".$data["id"].'" class="btn btn-primary btn-update">'.'update'.'</a>'
		    	.'<a href="database/delete.php?name='.$data["game"].'&time='.$data["time"]."&id=".$data["id"].'" class="btn btn-primary btn-delete">'.'delete'.'</a>'
		    	."</div>";
		?>
	</div>


	<!-- informatie:
	De naam van het spel
	Op welke tijd is deze gepland.
	Hoe lang het duurt
	Wie de uitleg geeft -->


	<div id='footer'>
		<h1>Pieterjan van Dijk &copy;<?php echo date("Y"); ?>.</h1>
	</div>
	<?php
	   	$name = $_GET['name'];
	   	$time = $_GET['time'];
	   	$teacher = $_GET['teacher'];
	   	$players = $_GET['players'];
	   	$id = $_GET['id'];
	?>
	<script type="text/javascript">
		function loadURL(){
			var name = '<?php echo $name ;?>';
			var time = '<?php echo $time ;?>';
			var teacher = '<?php echo $teacher ;?>';
			var players = '<?php echo $players ;?>';
			var id = '<?php echo $id ;?>';
			window.open("database/delete.php?name="+name+"&time="+time+"&teacher="+teacher+"&players="+players+"&id="+id, "_self");
		}
	</script>
</body>
</html>