<?php
	include("conexao.php");
	session_start();
	include("protegerPagina.php");
	protegerPagina();
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Estacionamento - Painel </title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- Meu CSS -->
		<link rel="stylesheet" href="style-index.css" type="text/css" media="all" />
	</head>
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
					<li> <a href="index.php">  Inicio </a> </li>
					<?php if(($_SESSION["Permissao"] == 1)) { ?>
					<li> <a href="panel.php">  Painel </a> </li>
					<li> <a href="panel.php?func=cadastro">  cadastro </a> </li>
					<li> <a href="panel.php?func=Usuarios">  Usuarios </a> </li>
					<li> <a href="entradasaida.php"> Entrada/Saída </a></li>					 
					<?php } ?>					
				</ul>
			</div>
			<div class="div_conteudo">
				<div class=" div_conteudo_page col-xs-12 col-md-6 col-md-offset-3">
				<?php
					error_reporting(false);
					$page = $_GET["func"];

					if (isset($page)){
						include("$page.php");
					} else {
						$select = $mysqli->query("SELECT * FROM usuarios");
						$row = $select->num_rows;
						$users = $row;

						?>

						<h4> Bem vindo ao Painel de Controle <?=$_SESSION["Usuario"]?> </h4>  <br /> <br />


						<h3> Informacoes do Site: </h3>

						<p>
							Usuarios Registrados: <?=$users?> <br />
						</p>
						<?php
					}						
				?>
				</div>
			</div>	
			<div class="div_rodape"> 
				<SPAN> Slater IT Developer's 2015 - Todos os direitos reservados. </SPAN>
			</div>
		</div>
	</body>
</html>