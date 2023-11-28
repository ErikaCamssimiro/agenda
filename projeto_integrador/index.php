<?php
	if (isset($_SESSION['email'])) {
		header('Location: pagina_restrita.php');
		exit();
	}

	if(isset($_POST['submit'])) {
	include_once('config.php');

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$result = mysqli_query($conexao2, "SELECT * FROM cadastro WHERE email='$email' AND senha='$senha'");
	if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        header('Location: principal.html');
        exit();
    } else {
        echo "Login falhou. Verifique suas credenciais.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Clínica Anakai</title>
	<style type="text/css">
		body{
			font-family: Arial, Helvetica, sans-serif;
			background-image: linear-gradient(85deg, #CE57FD, skyblue);
		}

		div{
			background-color: rgba(0, 0, 0, 0.8);
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 60px;
			border-radius: 15px;
			color: whitesmoke;
		}

		input{
			padding: 15px;
			border: none;
			outline: none;
			font-size: 15px;
		}

		#submit{
			padding: 10px;
			border: none;
			width: 50%;
			border-radius: 10;
			background-color: #9D4EDD;
			color: whitesmoke;
			font-size: 15px;
			margin-left: 25%;
		}

		button:hover{
			background-color: #CE57FD;
			cursor: pointer;
		}

		a{
			color: whitesmoke;
			font-size: 13px;
		}


	</style>

</head>
<body>
	<div>
	<form action="index.php" method="POST">
		<h1>Login</h1>
		<input type="text" name="email" placeholder="EmailUsuario" required>
		<br><br>
		<input type="password" name="senha" placeholder="Senha" required>
		<br>
		<a href="registro.php" target="_blank"><p>Não Possui Conta? Clique aqui.</a></p>
		<br>
        <b><input type="submit" name="submit" id="submit" value="Entrar"></a></b>
	</form>
	</div>
</body>
</html>