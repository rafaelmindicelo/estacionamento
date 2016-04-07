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
				<div id="div_Contato">
					<form action="" method="POST">
						<h4> E-mail: slater-it-developers@outlook.com </h4>
						<h4> Fone: (13) 3323-4004 </h4>
						<input name="iNome" id="iNome" type="text" placeholder="Seu Nome" /> <br />
						<input name="iAssunto" id="iAssunto" type="text" placeholder="Assunto" /> <br />
						<input name="iEmail" id="iEmail" type="text" placeholder="exemplo@email.com.br" /> <br />
						<textarea name="iTexto" id="iTexto"  /> </textarea> <br />
						<input name="iButton" id="iButton" type="submit" value="Enviar" />
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