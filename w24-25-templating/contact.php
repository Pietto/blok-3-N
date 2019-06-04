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
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	        $name = strip_tags($_POST['name']);
	        $email = strip_tags($_POST['email']);
	        $message = strip_tags($_POST['message']);
	        echo '<p style="color:white;">',
	        'Naam: ',$name,
	        '<br>Email: ',$email,
	        '<br>Bericht: ',$message,
	    	'</p>';
	    }
    ?>

    <?php
		// the message
		$msg = "First line of text\nSecond line of text";

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);

		// send email
		mail("pieterjan.v.dijk@Gmail.com","My subject",$msg);
	?>

	<form method="POST">
		<p>Naam:</p> <input type="text" name="name" id='name' value='<?php echo $name; ?>'>
		<p>Email:</p> <input type="text" name="email" id='email' value='<?php echo $email; ?>'>
		<p>Email:</p> <input type="text" name="email" id='email' value='<?php echo $email; ?>'>
		<p>Bericht:</p> <textarea name="message" rows="6" cols="25"><?php echo $message; ?></textarea><br />
		<input type="submit" value="Send" id='send'><input type="reset" value="Clear" id='reset'>
	</form>

	<script src="customizes/js.js"></script>
	<script>
		var title = document.title;
		document.getElementById(title).setAttribute("class", "active");
	</script>
</body>