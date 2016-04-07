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
		<link rel="stylesheet" href="_css/style-panel.css" type="text/css" media="all" />
	</head>
	<body>
		<div id="div_Container">
			<div id="div_Topo"> 
				<img id="imageTOPO" src="_imagens/toposite.png" alt="Imagem Logo" />
			</div>				
			<div id="div_Menu"> 
		    	<ul>
					<li> <a href="index.php">  Inicio </a> </li>
					<li> <a href="panel.php">  Painel </a> </li>
					<li> <a href="panel.php?func=cadastro">  cadastro </a> </li>
					<li> <a href="panel.php?func=Usuarios">  Usuarios </a> </li>
				</ul>
			</div>
			<div id="div_Conteudo">
				<div id="pTexto">
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
			<div id="div_Rodape"> 
				<SPAN> Slater IT Developer's 2015 - Todos os direitos reservados. </SPAN>
			</div>
		</div>
	</body>
</html>