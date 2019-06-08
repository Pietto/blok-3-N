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
		    if(empty($name)||empty($email)||empty($message)){
			   echo "<script type='text/javascript'>alert('please fill al requiered fields');</script>";
			}else{
		        echo '<p id="result" style="color: white;">',
		        'Naam: ',$name,
		        '<br>Email: ',$email,
		        '<br>Telefoon-nummer: ',$phone,
		        '<br>Bericht: ',$message,
		    	'</p>';
		    	echo "<style>#result,form{position: relative;top: 100px;}</style>";
		    }
	    }
    ?>

	<form method="POST">
		<p id='namep'>Naam:</p> <input type="text" name="name" id='name' value='<?php echo $name; ?>' required>
		<p id='emailp'>Email:</p> <input type="text" name="email" id='email' value='<?php echo $email; ?>'required>
		<p id='telp'>Telefoon-nummer:</p> <input type="tel" id="tel" name="phone" value='<?php echo $phone; ?>' required>
		<p id='messagep'>Bericht:</p> <textarea required name="message" rows="6" cols="25"><?php echo $message; ?></textarea>
		<br/><input type="submit" value="Send" id='send'><input type="reset" value="Clear" id='reset'>
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
</html>