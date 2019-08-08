<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Serene Island-Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="img/back3.jpg">
	<div class="header">
		<h2>Serene Island-Login</h2>
	</div>
	 
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>

		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="index.php">Sign Up</a>
		</p>

	</form>	

</body>
</html>