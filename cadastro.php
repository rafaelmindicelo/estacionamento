<?php 
	

	if ($_SESSION["Permissao"]!=1) {

	$redirect="http://localhost/estacionamento/panel.php";
	echo '<script language="javascript">';
	echo 'alert("Usuário sem Permissão para acesso!")';
	echo '</script>';
	header("location:$redirect");
	
	}

?>
<form id="form_usuario" action="" method="POST">
	<div class="form-group">
		<label for="nomeUsuario"> Usuario: </label>	
		<input type="text" class="form-control" id="nomeUsuario" name="user" placeholder="usuario" />
	</div>
	<div class="form-group">
		<label for="emailUsuario"> E-mail: </label>
	 	<input type="email" class="form-control" id="emailUsuario" name="email" placeholder="exemplo@email.com" />	
	</div>
	<div class="form-group">
		<label for="senhaUsuario"> Senha: </label>
	 	<input type="password" class="form-control" id="senhaUsuario" name="senha" placeholder="*******" />
	</div>
	<input type="submit" class="btn btn-default btn-block" name="button" value="Registrar" /> 	
		
</form>

<?php
	if(isset($_POST["button"])) {
		$usuario = $_POST["user"];
		$email   = $_POST["email"];
		$senha   = $_POST["senha"];

		if($usuario == "" || $email == "" || $senha == "") {
			echo "<script> alert('Preencha todos os campos!'); </script>";
		}

		$query = $mysqli->query("SELECT * FROM usuarios WHERE Email='$email' OR Usuario='$usuario'");
		$row = $query->num_rows;
		if($row > 0) {
			echo "<script> alert('Usuario ou e-mail ja existe!'); </script>";
		} else {
			$query2 = $mysqli->query("INSERT INTO usuarios (Usuario, Senha, Email, Permissao) VALUES ('$usuario', '$senha', '$email', '0')");
			if($query2) {
				echo "<script> alert('Usuario cadastrado com sucesso!'); location.href='panel.php' </script>";
			} else {
				echo "<script> alert('Erro ao adicionar novo usuario!'); </script>";
			}
		}
	}
?>