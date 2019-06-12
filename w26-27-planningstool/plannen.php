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
		<form class="form-horizontal">
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="game"><p>Welk spel wilt u gaan spelen?</p></label>
		    	<div class="col-sm-10">
		        	<input type="button" id='urlbutton game' onclick='loadURL()' class="form-control input">
		     	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="time"><p>tijdvak:</p></label>
		    	<div class="col-sm-10">
		        	<input type="time" class="form-control input" id="time" min="9:00" max="16:00" required>
		     	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="teacher"><p>leraar:</p></label>
		    	<div class="col-sm-10">
		        	<input type="text" class="form-control input" id="teacher"  placeholder="Wie gaat het spel uitleggen?">
		     	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="user"><p>spelers:</p></label>
		    	<div class="col-sm-10">
		    		<div class='personsdiv'>
			        	<input type="text" class="form-control input persons" id="user1" maxlength="20" placeholder="Speler 1">
			        	<input type="text" class="form-control input persons" id="user3" maxlength="20" placeholder="Speler 3">
			        	<input type="text" class="form-control input persons" id="user5" maxlength="20" placeholder="Speler 5">
			        	<input type="text" class="form-control input persons" id="user7" maxlength="20" placeholder="Speler 7">
					</div>
					<div class='personsdiv'>
			        	<input type="text" class="form-control input persons" id="user2" maxlength="20" placeholder="Speler 2">
			        	<input type="text" class="form-control input persons" id="user4" maxlength="20" placeholder="Speler 4">
			        	<input type="text" class="form-control input persons" id="user6" maxlength="20" placeholder="Speler 6">
			        	<input type="text" class="form-control input persons" id="user8" maxlength="20" placeholder="Speler 8">
		        	</div>
		     	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="usr"></label>
		    	<div class="col-sm-10">
		        	<input type="submit" id='noidyet' class="form-control input" id="usr">
		     	</div>
		    </div>
		</form>
	</div>


	<div id='footer'>
		<h1>Pieterjan van Dijk &copy;<?php echo date("Y"); ?>.</h1>
	</div>

	<?php
		include 'database/connect.php';
		include 'database/create.php';		
	?>
	<script src="plannen.js"></script>
</body>
</html>