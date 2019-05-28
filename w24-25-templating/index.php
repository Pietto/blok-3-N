<!DOCTYPE html>
<html>
<head>
	<title/>Home</title>
	<?php include 'include/head.php'; ?>
  	<link rel="stylesheet" type="text/css" href="customizes/styles.css">
</head>
<body>

	<?php
		include 'include/header.php';
	?>
	<div id='bottom-header'>
		<h1>Headertext</h1>
	</div>

	<div id='card1' class='cards'>
		<div class='card-header'>
			<h1>card-header</h1>
		</div>
		<div class='card-content'>
			<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
		</div>
	</div>

	<div id='card2' class='cards'>
		<div class='card-header'>
			<h1>card-header</h1>
		</div>
		<div class='card-content'>
			<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
		</div>
	</div>

	<script src="customizes/js.js"></script>
	<script>
		var title = document.title;
		document.getElementById(title).setAttribute("class", "active");
	</script>

</body>
</html>