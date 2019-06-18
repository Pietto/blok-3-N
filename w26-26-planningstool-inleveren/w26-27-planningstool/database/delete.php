<!DOCTYPE html>
<html>
<head>
	<title>Plannings tool</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../tool.css">
</head>
<body>

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
		      		<li><a href="../tool.php">Home</a></li>
		      		<li><a href="../plannen.php">Inplannen</a></li>
		      		<li><a href="../planning.php">Planning bekijken</a></li>
		      		<li class='active'><a href="#">Delete</a></li>
		    	</ul>
		  	</div>
		</nav>
	</div>
	<?php
	   	$id = $_GET['id'];
	   	$name = $_GET['name'];
	   	$time = $_GET['time'];
	?>

	<div id='content'>
		<h1>Weet u zeker dat u '<?php echo $name; ?>' geplant om <?php echo $time; ?> wilt verwijderen?</h1>
		<div id='confirmbtns'>
			<button onclick="window.location.href='../planning.php'" id='yesbtn' class='btn btn-primary'>Nee, ga terug</button>
			<form id='form' method='POST'>
				<button id='nobtn' class='btn btn-primary'>Ja, verwijder</button>
			</form>
		</div>
	</div>

	<?php include 'execute-delete.php';?>
	<div id='footer'>
		<h1>Pieterjan van Dijk &copy;<?php echo date("Y"); ?>.</h1>
	</div>
	</script>
</body>
</html>