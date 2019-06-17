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
		      		<li class='active'><a href="#">Update</a></li>
		    	</ul>
		  	</div>
		</nav>
	</div>
	<?php
	   	$name = $_GET['name'];
	   	$time = $_GET['time'];
	   	$teacher = $_GET['teacher'];
	   	$players = $_GET['players'];
	   	$id = $_GET['id'];
	?>

	<?php
		include 'execute-update.php'
	?>
	<div id='content'>
		<form class="form-horizontal" method="POST">
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="game"><p>Spel veranderen:</p></label>
		    	<div class="col-sm-10">
		        	<input name='game' type="button" id='urlbutton game' onclick='loadURL()' class="form-control input" value='<?php echo $name; ?>'>
		     	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="time"><p>tijd veranderen:</p></label>
		    	<div class="col-sm-10">
		        	<input name='time' type="time" class="form-control input" id="time" min="9:00" max="16:00" value='<?php echo $time; ?>' required>
		     	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="teacher"><p>leraar veranderen:</p></label>
		    	<div class="col-sm-10">
		        	<input name='teacher' type="text" class="form-control input" id="teacher"  placeholder="Wie gaat het spel uitleggen?" value='<?php echo $teacher; ?>' required>
		     	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="user"><p>spelers veranderen:</p></label>
		    	<div class="col-sm-10">
			        <input name='players' type="text" class="form-control input persons" id="user1" placeholder="Spelers" value='<?php echo $players; ?>' required>
		     	</div>
		    </div>
		    <div class="form-group">
		    	<label class="control-label col-sm-2" for="usr"></label>
		    	<div class="col-sm-10">
		        	<input type="submit" id='noidyet' class="form-control input" id="usr" value='update' style='background-color: #ffdc00;' onclick="return  confirm('Weet u zeker dat u \'<?php echo $name ?>\' aan wilt passen')">
		     	</div>
		    </div>
		</form>
	</div>

	<div id='footer'>
		<h1>Pieterjan van Dijk &copy;<?php echo date("Y"); ?>.</h1>
	</div>
	<script>
	function loadURL(){
		var name = '<?php echo $name ;?>';
		var time = '<?php echo $time ;?>';
		var teacher = '<?php echo $teacher ;?>';
		var players = '<?php echo $players ;?>';
		var id = '<?php echo $id ;?>';
		window.open("games.php?name="+name+"&time="+time+"&teacher="+teacher+"&players="+players+"&id="+id, "_self");
	}
	</script>
</body>
</html>