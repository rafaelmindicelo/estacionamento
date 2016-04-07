<?php
	$ipPlayer = $_SERVER["REMOTE_ADDR"];
	include("conexao.php");
?>


<!DOCTYPE html>
<html>
	<head>
		<title> ESTACIONAMENTO </title>
		<link rel="stylesheet" href="_css/registro.css" type="text/css"/>
	</head>
	<body>
		<div id = "container">
			<div id = "login">
				<form action = "" method = "POST">
					<img id="imagelogo" src="_imagens/logo.png" alt="Imagem Logo"/>
					<br/>
					<br/>
					<div id = "input">
						<span> Usuario: </span>
							<input name="input_User" type="text" /> <br />
						<span> E-mail: </span>
							<input name="input_Email" type="text" /> <br />
						<span> Senha: </span>
							<input name="input_Pass" type="password" />	 
						<input type="submit" name="button" value="Registrar" />
					</div>
				</form>
					<span class="span_IP"> Por seguranca seu endereco de IP (  <?php echo $ipPlayer; ?>  ) foi registrado! </span>
			</div>
		</div>
	</body>
</html>

<?php
	if(isset($_POST["button"])) {
		$user  = mysqli_real_escape_string($mysqli, $_POST["input_User"]);
		$email = mysqli_real_escape_string($mysqli, $_POST["input_Email"]);
		$pass  = mysqli_real_escape_string($mysqli, $_POST["input_Pass"]);

		if($_POST["input_User"] == "" OR $_POST["input_Pass"] == "") {
			echo "<script> alert ('Preencha todos os campos'); location.href='registro.php'</script>";
		}
		$query = $mysqli->query("SELECT * FROM usuarios WHERE Email='$email' OR Usuario='$user'");
		$row = $query->num_rows;
		if($row > 0) {
			echo "<script> alert('Usuario ou e-mail ja existe!'); </script>";
		} else {
			$query2 = $mysqli->query("INSERT INTO usuarios (Usuario, Senha, Email, Permissao) VALUES ('$user', '$pass', '$email', '0')");
			if($query2) {
				echo "<script> alert('Usuario cadastrado com sucesso!'); location.href='pag-login.php' </script>";
			} else {
				echo "<script> alert('Erro ao adicionar novo usuario!'); </script>";
			}
		}
	}
?>