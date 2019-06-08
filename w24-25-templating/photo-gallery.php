<!DOCTYPE html>
<html>
<head>
	<title>Photo gallery</title>
	<?php include 'include/head.php'; ?>
  	<link rel="stylesheet" type="text/css" href="customizes/styles.css">
</head>
<body>

	<?php
		include 'include/header.php';
	?>


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