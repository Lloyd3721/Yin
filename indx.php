<!DOCTYPE html>
<html>
<head>
	<title>Formulier</title>
</head>
<body>
	<h2>Login</h2>
	<form method="post">
		<label for="username">Gebruikersnaam:</label>
		<input type="text" name="username" id="username"><br><br>
		
		<label for="password">Wachtwoord:</label>
		<input type="password" name="password" id="password"><br><br>
		
		<input type="submit" value="Inloggen">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST['username'];
		$password = $_POST['password'];
		echo "<h2>Ingevoerde gegevens:</h2>";
		echo "Gebruikersnaam: " . $username . "<br>";
		echo "Wachtwoord: " . $password;
	}
	?>
</body>
</html>