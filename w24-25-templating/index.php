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
		include 'include/carousel.php';
	?>

	<div id='divider'></div>

	<div id='card1' class='cards'>
		<div class='card-header'>
			<h1>Handige informatie</h1>
		</div>
		<div class='card-content'>
			<?php
			  $birthDate = "02/19/2002";
			  $birthDate = explode("/", $birthDate);
			  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
			    ? ((date("Y") - $birthDate[2]) - 1)
			    : (date("Y") - $birthDate[2]));
			?>
			<p>Ik ben Pieterjan van Dijk, ik ben een <?php echo $age?> jarige student die graag creatief bezig is. Op dit moment (<?php echo date('Y'); ?>) doe ik de opleiding Media- en applicatieontwikkelaar.</p>
		</div>
	</div>

	<div id='card2' class='cards'>
		<div class='card-header'>
			<h1>Zicht op de toekomst</h1>
		</div>
		<div class='card-content'>
			<p>Hoewel ik nu nog als medewerker achter de servicebalie sta bij 'Dirk van den Broek&copy;', hoop ik zodra ik mijn opleiding af heb gemaakt aan de slag te gaan als applicatie-onwikkelaar. Door mijn creatieve kijk op het leven ben ik zowel in te zeteen voor front- en backend ontwikkelingen.</p>
		</div>
	</div>


	<div id='card3' class='cards'>
		<div class='card-header'>
			<h1>Mijn werk en skills</h1>
		</div>
		<div class='card-content'>
			<p>Ik ben een gedreven, doorzettende en onderzoekende jongen die zich graag in de details richt. Ik wil graag mijn creativiteit kwijt, dat hoop ik te kunnen doen door middel van deze opleiding, hiernaast houdt ik er ook van om de levens van mensen makkelijker te maken en om iets origineels te maken.</p>
		</div>
	</div>

	<div id='buttondiv'>
		<div id='expandbtn'>
			<h1>Klik hier om meer uit te vinden over 'mijn werk en mijn skills'</h1>
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