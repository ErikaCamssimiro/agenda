<?php
if(isset($_POST['submit'])) {
	include_once('config.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$sexo = $_POST['genero'];
	$data_nasc = $_POST['data_nasc'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$endereco = $_POST['endereco'];
	$senha = $_POST['senha'];

	$result = mysqli_query($conexao2, "INSERT INTO cadastro(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco, senha)
	VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco', '$senha')");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro | Clínica Anakai</title>

	<style type="text/css">
		body{
			font-family: Arial, Helvetica, sans-serif;
			background-image: linear-gradient(85deg, #CE57FD, skyblue);
		}

		.box{
			color: whitesmoke;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: rgba(0, 0, 0, 0.8);
			padding: 15px;
			border-radius: 15px;
			width: 20%;
		}

		fieldset{
			border: 3px solid #CE57FD;
		}

		legend{
			border: 1px solid #CE57FD;
			padding: 10px;
			text-align: center;
			background-color: #CE57FD;
			border-radius: 8px;
		}

		.inputBox{
			position: absolute;
		}

		.inputUser{
			background: none;
			border: none;
			border-bottom: 1px solid whitesmoke;
			outline: none;
			color: whitesmoke;
			font-size: 15px;
			width: 100%;
			letter-spacing: 2px;

		}

		.labelInput{
			position: absolute;
			top: 0px;
			left: 0px;
			pointer-events: none;
			transition: .5s;
		}

		.inputUser:focus ~ .labelInput, 
		.inputUser:valid ~ .labelInput{
			top: -20px;
			font-size: 12px;
			color: mediumpurple;
		}

		#senha{
			top: -20px;
			font-size: 12px;
			color: mediumpurple;
		}

		#submit{
			padding: 10px;
			border: none;
			width: 100%;
			border-radius: 10;
			background-color: #9D4EDD;
			color: whitesmoke;
			font-size: 18px;
			cursor: pointer;
			border-radius: 10px;
			font-family: Arial, Helvetica, sans-serif;
		}

		#submit:hover{
			background-image: linear-gradient(to right, rgb(147,112,219), rgb(138,43,226));
		}

		#data_nasc{
			border: none;
			border-radius: 10px;
			outline: none;
			padding: 8px;
			font-size: 15px;
		}

	</style>
</head>
<body>
	<div class="box">
		<form action="registro.php" method="POST">
			<fieldset>
				<legend><b>Formulário de Cadastro</b></legend>
				<br><br>
				<div class="inputBox">
					<input type="text" name="nome" id="nome" class="inputUser" required>
					<label for="nome" class="labelInput">Nome</label>
				</div>
				<br><br><br>
				<div class="inputBox">
					<input type="text" name="email" id="email" class="inputUser" required>
					<label for="nome" class="labelInput">E-mail</label>
				</div>
				<br><br><br>
				<div class="inputBox">
					<input type="tel" name="telefone" id="telefone" class="inputUser" min="1" max="11" required>
					<label for="telefone" class="labelInput">Telefone</label>
				</div>
				<br><br>
				<div class="inputBox>">
				<p>Sexo:</p>
				<input type="radio" name="genero" value="feminino" required>
				<label for="feminino">Feminino</label>
				<input type="radio" name="genero" value="masculino" required>
				<label for="masculino">Masculino</label>
				<input type="radio" name="genero" value="outro" required>
				<label for="outro">Outro</label>
				</div>
				<br>
					<label for="data_nasc"><b>Data de Nascimento</b></label>
					<input type="date" name="data_nasc" id="data_nasc" required>
				<br><br><br>
				<div class="inputBox">
					<input type="text" name="cidade" id="cidade" class="inputUser" required>
					<label for="cidade" class="labelInput">Cidade</label>
				</div>
				<br><br><br>
				<div class="inputBox">
					<input type="text" name="estado" id="estado" class="inputUser" required>
					<label for="estado" class="labelInput">Estado</label>
				</div>
				<br><br><br>
				<div class="inputBox">
					<input type="text" name="endereco" id="endereco" class="inputUser" required>
					<label for="endereco" class="labelInput">Endereço</label>
				</div>
				<br><br><br>
				<div class="inputBox">
					<label for="senha">Criar Senha</label>
					<input id="senha" type="password" name="senha" required />
				</div>
				<br><br>
				<b><input type="submit" name="submit" id="submit"></b>
			</fieldset>
		</form>
		
	</div>

</body>
</html>