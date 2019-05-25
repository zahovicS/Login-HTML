<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>REGISTRO DE USUARIO</title>
	<link rel="stylesheet" href="css/style-register.css">
</head>
<body>
<div class="register-box">
	<img class="logo" src="img/logo.png" alt="Logo">
	<h1>REGISTRO DE USUARIO</h1>
	<form action="registro.php" method="POST">
		<label for="name">Nombre</label>
		<input type="text" placeholder="Nombre" name="name">

		<label for="apel">Apellidos</label>
		<input type="text" placeholder="Apellidos" name="apel">
		
		<label for="email">Correo</label>
		<input type="text" placeholder="Correo Electronico" name="email">
		
		<label for="password">Contraseña</label>
		<input type="password" placeholder="Contraseña" name="password">
		
		<label for="password2">Confirmar Contraseña</label>
		<input type="password" placeholder="Confirmar Contraseña" name="password2">

		<input type="submit" value="Registrarse" id="Register_user">
	</form>
</div>
</body>
</html>