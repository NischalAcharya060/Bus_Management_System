<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bus Management System | Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/940b4ce52e.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #5f9ea0;">
	<div class="header">
		<img src="img/buslogo.png" alt="Bus Logo" width="60px" height="60px">
		<h2>Register Your Account</h2>
	</div>

	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label><i class="fas fa-user"></i>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>" required>
		</div>
		<div class="input-group">
			<label><i class="fa-solid fa-envelope"></i>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>" required>
		</div>
		<div class="input-group">
			<label><i class="fas fa-lock"></i>Password</label>
			<input type="password" name="password_1" required>
		</div>
		<div class="input-group">
			<label><i class="fas fa-lock"></i>Confirm password</label>
			<input type="password" name="password_2" required>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<span style="font-size: 16px;
		margin: 7rem;">Already a member? <a href="login.php"><i class="fa-solid fa-user-tie"></i></a></span>
	</form>
</body>

</html>