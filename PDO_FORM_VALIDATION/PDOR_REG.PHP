<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER USING BOOTSTRAP</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../STYLE/login.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
		  <?php 
			if(isset($_SESSION['message'])) : ?>
			   <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
			<?php endif; ?>

			<div class="signup">
				<form action="PDO_REG.PHP" method="POST">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="Fname" placeholder="User name" required="">
					<input type="email" name="Mail" placeholder="Email" required="">
					<input type="password" name="Password" placeholder="Password" required="">
					<button name="btn" type="submit">REGISTER</button>
				</form>
			</div>
	</div>
</body>
</html>