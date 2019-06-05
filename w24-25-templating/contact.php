<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<?php include 'include/head.php'; ?>
  	<link rel="stylesheet" type="text/css" href="customizes/styles.css">
</head>
<body>
	<?php
		include 'include/header.php';
	?>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	        $name = strip_tags($_POST['name']);
	        $email = strip_tags($_POST['email']);
	        $message = strip_tags($_POST['message']);
	        $phone = strip_tags($_POST['phone']);
	        echo '<p style="color:white;">',
	        'Naam: ',$name,
	        '<br>Email: ',$email,
	        '<br>Telefoon-nummer: ',$phone,
	        '<br>Bericht: ',$message,
	    	'</p>';
	    }
    ?>

	<form method="POST">
		<p>Naam:</p> <input type="text" name="name" id='name' value='<?php echo $name; ?>'>
		<p>Email:</p> <input type="text" name="email" id='email' value='<?php echo $email; ?>'>
		<p>Telefoon-nummer:</p> <input type="tel" id="tel" name="phone" value='<?php echo $phone; ?>'>
		<p>Bericht:</p> <textarea name="message" rows="6" cols="25"><?php echo $message; ?></textarea><br />
		<input type="submit" value="Send" id='send'><input type="reset" value="Clear" id='reset'>
	</form>

	<?php
		include 'include/footer.php';
	?>

	<script src="customizes/js.js"></script>
	<script>
		var title = document.title;
		document.getElementById(title).setAttribute("class","active");
	</script>
</body>