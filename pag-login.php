
<?php
	$ipPlayer = $_SERVER["REMOTE_ADDR"];
	include("conexao.php");
?>


<!DOCTYPE html>
<html>
	<head>
		<title> ESTACIONAMENTO </title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- Meu CSS -->
		<link rel="stylesheet" href="style-index.css" type="text/css" media="all" />
		
	</head>
	<body class="body-login">
		<div class = "login">
			<div class="conteudo_login">
				<img id="imagelogo" src="logo.png" alt="Imagem Logo"/>
				<form action = "" method = "POST">
					<div class="form-group">
						<!-- <label for="login"> Usuario: </label> -->
						<input name="input_User" class="form-control" type="text" id="login" placeholder="Usuário" /> <br />
					
						<!-- <label for="senha"> Senha: </label> -->
						<input name="input_Pass" class="form-control" type="password" placeholder="Senha" /> 
					</div>
						<input type="submit" class="btn btn-default btn-block" name="button" value="Login" /><br />
						<a href="index.php" class="btn btn-default btn-block">Voltar</a>
					</form>

				<span class="span_IP"> Por seguranca seu endereco de IP (  <?php echo $ipPlayer; ?>  ) foi registrado! </span>
			</div>
		</div>
	</body>
</html>

<?php
	if(isset($_POST["button"])) {
		$user = mysqli_real_escape_string($mysqli, $_POST["input_User"]);
		$pass = mysqli_real_escape_string($mysqli, $_POST["input_Pass"]);

		if($_POST["input_User"] == "" OR $_POST["input_Pass"] == "") {
			echo "<script> alert ('Preencha todos os campos'); location.href='pag-login.php'</script>";
		}
		$check = $mysqli->query("SELECT * FROM usuarios WHERE Usuario='$user' AND Senha='$pass'");
		$row  = $check->num_rows;
		if($row > 0) {
			$check2 = $mysqli->query("SELECT Permissao FROM usuarios WHERE Usuario='$user'");
			$row2 = $check2->num_rows;
			if ($row2) {
				$dadosUsuario = $check2->fetch_array();
				if ($dadosUsuario) {
					echo "<script> alert ('Bem vindo ao Painel de Controle!'); location.href='panel.php'</script>";
					session_start();
					$_SESSION["Usuario"] = $user;
					$_SESSION["Permissao"] = $dadosUsuario["Permissao"];
				} else {
					echo "<script> alert ('Voce nao em permissao!'); location.href='pag-login.php'</script>";
				}
			}
		} else {
			echo "<script> alert ('Usuario ou Senha incorretos!'); location.href='pag-login.php'</script>";
			
		}
	}
?>