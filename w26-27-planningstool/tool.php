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

	<div id='top'>
		<div id='header'>
			<h1>Planningstool</h1>
			<h2>Have fun boys!</h2>
		</div>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
		    	<div class="navbar-header">
		      		<p class="navbar-brand">Plannings tool</p>
		    	</div>
		    	<ul class="nav navbar-nav">
		      		<li class="active"><a href="tool.php">Home</a></li>
		      		<li><a id='planner' href="plannen.php">Inplannen</a></li>
		      		<li><a id='planning' href="planning.php">Planning bekijken</a></li>
		    	</ul>
		    	<button class="btn btn-danger navbar-btn"><a href='https://www.youtube.com/watch?v=fC0ZxCqw0pA' target="blank">Help</a></button>
		  	</div>
		</nav>
	</div>

	<div id='contentHome'>
		<h1>Plannings tool spelletjesmiddag 2019</h1>
		<p><br>Dit is de 'plannings tool' voor de spelletjesmiddag 2019 op het Davinci College te Gorinchem.<br>In het menu hierboven kunt u op het kopje '<a id='showplanner'>Inplannen</a>' klikken om een spel toe te voegen aan de planning.<br>U kunt op het knopje '<a id='showplanning'>planning bekijken</a>' klikken om de planning te bekijken.</p>
	</div>

	<div id='footer'>
		<h1>Pieterjan van Dijk &copy;<?php echo date("Y"); ?>.</h1>
	</div>

	<?php
		include 'database/connect.php';
	?>

	<script src="scripts/tool-guide's.js"></script>
</body>
</html>