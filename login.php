<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bus Management System | Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/940b4ce52e.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
	</script>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body style="background-color: #5f9ea0;">

	<div class="header">
		<img src="img/buslogo.png" alt="Bus Logo" width="60px" height="60px">
		<h2>Login To IIC Bus Management Dashboard</h2>
	</div>

	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label><i class="fas fa-user"></i>Username</label>
			<input type="text" name="username" placeholder="username" required>
		</div>
		<div class="input-group">
			<label><i class="fas fa-lock"></i>Password</label>
			<input type="password" name="password" placeholder="password" required>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<span style="font-size: 16px;
		margin: 7rem;">Not yet a member? <a href="register.php"><i class="fa-sharp fa-solid fa-user-plus"></i></a></span>


	</form>


</body>

</html>