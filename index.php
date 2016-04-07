<?php
	include("conexao.php");
	session_start();
	include("sairPagina.php");
	sairPagina();
?>


<!DOCTYPE html>
<html>
	<head>
		<title> Estacionamento </title>
		<link rel="stylesheet" href="_css/style-index.css" type="text/css" media="all" />
	</head>
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
					<li> <a href="cadMensal.php">  Cadastro Mensalista </a> </li>
					<li> <a href="index.php?func=sairPagina">  Sair ( <?php echo $_SESSION["Usuario"]; ?> ) </a> </li>
					<?php } else { ?>
					<li> <a href="index.php">  Inicio </a> </li>
					<li> <a href="contato.php">  Contato </a> </li>
					<li> <a href="pag-login.php">  Login </a> </li>
					<?php } ?>
				</ul>
			</div>
			<div id="div_Conteudo">
				<div id="div_Postagem"> 
				<?php
					$verificar = $mysqli->query("SELECT * FROM postagens ORDER BY ID");
					$Row = $verificar->num_rows;
					
					if ($Row <= 0) {
						echo "Nenhuma mensagem foi postada!";
					} else {
						while ($array = $verificar->fetch_array()) {
							$titulo = $array['Titulo'];
							$texto = $array['Texto'];
							$autor = $array['Autor'];
							$data = $array['Data'];

				?>
				<h1> <b> Titulo: </b> <?php echo $titulo; ?> <b> Data: </b> <?php echo $data; ?> </h1>
				<span> <b> Autor: </b> <?php echo $autor; ?> </span>
				<p> <?php echo $texto; ?> </p>
				<?php
						}
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