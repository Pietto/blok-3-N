<!DOCTYPE html>
<html>
<head>
	<title>Over mij</title>
	<?php include 'include/head.php'; ?>
  	<link rel="stylesheet" type="text/css" href="customizes/styles.css">
</head>
<body>
	<?php
		include 'include/header.php';
	?>

	<div id='mebox'>
		<h1 id='meheader'>Mijn mentaliteit:</h1>
		<div class='meitems' id='meitem1'>
			<div class='meimg' id='meimg1'></div>
			<p class='metext' id='metext1'>Zo origineel mogelijk</p>
		</div>
		<div class='meitems' id='meitem2'>
			<div class='meimg' id='meimg2'></div>
			<p class='metext' id='metext2'>Student bij Davinci College Gorinchem</p>
		</div>
		<div class='meitems' id='meitem3'>
			<div class='meimg' id='meimg3'></div>
			<p class='metext' id='metext3'>Blik op de toekomst</p>
		</div>
		<div class='meitems' id='meitem4'>
			<div class='meimg' id='meimg4'></div>
			<p class='metext' id='metext4'>Leergierig</p>
		</div>
		<div class='meitems' id='meitem5'>
			<div class='meimg' id='meimg5'></div>
			<p class='metext' id='metext5'>Samen- of alleen werken</p>
		</div>
		<div class='meitems' id='meitem6'>
			<div class='meimg' id='meimg6'></div>
			<p class='metext' id='metext6'>HTML,CSS,Javascript en PHP</p>
		</div>
	</div>
	
	<?php
		include 'include/footer.php';
	?>
	<script src="customizes/js.js"></script>
	<script>
		var title = document.title;
		document.getElementById(title).setAttribute("class", "active");
	</script>
</body>
</html>