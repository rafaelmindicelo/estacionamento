<?php
	session_start();
	include("sairPagina.php");
	sairPagina();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Where's My Car - Contato </title>
		<link rel="stylesheet" href="style-index.css" type="text/css" media="all" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
		
	</dead>
	<body>
		<div class="div_container container">
			<div class="div_topo col-xs-12">
			<?php if(isset($_SESSION["Usuario"])) { ?>
				<div class="nome_usuario pull-right">
					<?php echo $_SESSION["Usuario"]; ?>
					<a href="index.php?func=sairPagina" class="text-danger btn"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Sair</a>
				</div>

			<?php } ?>

				<img class="imageTOPO" src="toposite.png" alt="Imagem Logo" />
			</div>
			<div class="div_menu col-xs-12"> 
		    	<ul>
		    		<?php 
		    			if(isset($_SESSION["Usuario"])) { ?>
		    		<li> <a href="index.php">  Inicio </a> </li>
					<li> <a href="contato.php">  Contato </a> </li>
						<?php if(($_SESSION["Permissao"] == 1)) { ?>
					<li> <a href="panel.php">  Painel </a> </li>
						<?php } ?>
					<?php } else { ?>
					<li> <a href="index.php">  Inicio </a> </li>
					<li> <a href="contato.php">  Contato </a> </li>
					<li> <a href="pag-login.php">  Login </a> </li>
					<?php } ?>
				</ul>
			</div>
			<div class="div_boxe col-xs-12">
				<img src="fale_conosco.jpg" alt="...">
			</div>
			<div class="div_conteudo col-xs-12">
				<div class="div_contato col-xs-12 col-md-6 col-md-offset-3">
						<h4> E-mail: slater-it-developers@outlook.com </h4>
						<h4> Fone: (13) 3323-4004 </h4>
					<form action="" method="POST">

						<div class="form-group">
							<input ame="iNome" id="iNome" type="text" placeholder="Seu Nome" class="form-control"/>
						</div>
						<div class="form-group">
							<input name="iAssunto" id="iAssunto" type="text" placeholder="Assunto" class="form-control"/>	
						</div>
						<div class="form-group">
							<input name="iEmail" id="iEmail" type="email" placeholder="exemplo@email.com.br" class="form-control" />	
						</div>
						<div class="form-group">
							<textarea name="iTexto" id="iTexto" class="form-control" /> </textarea> 	
						</div>
						<input name="iButton" id="iButton" class="btn btn-default btn-block " type="submit" value="Enviar" />
					</form>
				</div>

			</div>

			<div class="div_rodape">
				<SPAN> Slater It Developer's 2016 - Todos os direitos reservados. </SPAN>
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