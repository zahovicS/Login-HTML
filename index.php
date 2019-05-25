<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="Login-box">
	<img class="logo" src="img/logo.png" alt="Logo">
	<h1>Login</h1>
	<form action="process.php" method="POST">
		<labe for="username">Usuario</label>
		<input type="text" placeholder="Usuario" id="user">
		<labe for="password">Contraseña</label>
		<input type="password" placeholder="Contraseña" id="pass">
		<input type="submit" value="Log in" id="login_user">
		<a href="#">Perdiste tu contraseña?</a><br />
		<a href="#">No tienes una cuenta?</a>
	</form>
</div>
</body>
</html>