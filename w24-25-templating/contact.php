<!DOCTYPE html>
<html>
<head>
	<title/>Contact</title>
	<?php include 'include/head.php'; ?>
  	<link rel="stylesheet" type="text/css" href="customizes/styles.css">
</head>
<body>
	<?php
		include 'include/header.php';
	?>

	<form method="POST">
		<p>Naam:</p> <input type="text" name="name" id='name'>
		<p>Email:</p> <input type="text" name="email" id='email'>
		<p>Bericht:</p> <textarea name="message" rows="6" cols="25"></textarea><br />
		<input type="submit" value="Send" id='send'><input type="reset" value="Clear" id='reset'>
	</form>

	<?php	
	
	?>

	<script src="customizes/js.js"></script>
	<script>
		var title = document.title;
		document.getElementById(title).setAttribute("class", "active");
	</script>
</body>