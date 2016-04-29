<?php
	$ipPlayer = $_SERVER["REMOTE_ADDR"];
	include("conexao.php");
?>


<!DOCTYPE html>
<html>
	<head>
		<title> ESTACIONAMENTO </title>
		<link rel="stylesheet" href="_css/style.css" type="text/css"/>
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
						<span> Senha: </span>
							<input name="input_Pass" type="password" /> 
							<input type="submit" name="button" value="Login" /><br />
						</div>
					</form>
					<br/>
					<br/>
					<br/>
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
				if ($dadosUsuario["Permissao"] == 1) {
					echo "<script> alert ('Bem vindo ao Painel de Controle!'); location.href='panel.php'</script>";
					session_start();
					$_SESSION["Usuario"] = $user;
				} else {
					echo "<script> alert ('Você não tem permissão!'); location.href='pag-login.php'</script>";
				}
			}
		} else {
			echo "<script> alert ('Usuário ou Senha incorretos!'); location.href='pag-login.php'</script>";
			
		}
	}
?>