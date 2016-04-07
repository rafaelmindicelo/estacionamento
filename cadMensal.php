<?php
	session_start();
	include("sairPagina.php");
	sairPagina();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Where's My Car - Contato </title>
		<link rel="stylesheet" href="_css/style-contato.css" type="text/css" media="all" />
	</dead>
	<body>
		<div id="div_Container">
			<div id="div_Topo">
				<img id="imageTOPO" src="_imagens/toposite.png" alt="Imagem Logo" />

			</div>

			<div id="div_Menu"> 
		    	<ul>
		    		<?php 
		    			if(isset($_SESSION["Usuario"])) { ?>
		    		<li> <a href="index.php">  Inicio </a> </li>
					<li> <a href="contato.php">  Contato </a> </li>
					<li> <a href="panel.php">  Painel </a> </li>
					<li> <a href="index.php?func=sairPagina">  Sair ( <?php echo $_SESSION["Usuario"]; ?> ) </a> </li>
					<?php } else { ?>
					<li> <a href="index.php">  Inicio </a> </li>
					<li> <a href="contato.php">  Contato </a> </li>
					<li> <a href="registro.php">  Registro </a> </li>
					<li> <a href="pag-login.php">  Login </a> </li>
					<?php } ?>
				</ul>
			</div>

			<div id="div_Conteudo">
				<div id="div_CadMensal">
					<form action="" method="POST">
						<p>Nome:<input type="text" id="cNome" name="tNome"</p>
						<p>CPF:<input type="text" id="cCPF" name="tCPF"</p></p>
						<p>Endereço:<input type="text" id="cEnd" name="tEnd"</p>
						Numero:<input type="number" id="cNum" name="tNum"</p>
						Complemento:<input type="text" id="cComp" name="tComp"</p></p>
						<p>Telefone:<input type="tel" id="cTel" name="tTel"</p>
						Celular:<input type="tel" id="cCel" name="tCel"</p></p>
			
		</form>
				</div>

			</div>

			<div id="div_Rodape">
				<SPAN> Slater It Developer's 2015 - Todos os direitos reservados. </SPAN>
			</div>	
		</div>
	</body>
</html>

<?php
	if (isset ($_POST["iButton"])) {
		$iNome		= $_POST["iNome"];
		$iAssunto	= $_POST["iAssunto"];
		$iEmail		= $_POST["iEmail"];
		$iTexto		= $_POST["iTexto"];

		if($iNome == "" || $iAssunto == "" || $iEmail == "" || $iTexto == "") {
			echo "<script> alert('Preencha todos os campos'); location.href='contato.php'</script>";
		}

		$CorpoEmAIL = "
			E-mail: $iEmail
			Nome = $iNome

			$iTexto

		";
		$Enviar = mail("contato@mycar.com.br", $iAssunto, $CorpoEmAIL);
		echo "<script> alert('E-mail enviado com sucesso!'); location.href='contato.php'</script>";
	}
?>		