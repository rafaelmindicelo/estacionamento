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
		<link rel="stylesheet" href="style-index.css" type="text/css" media="all" />

		<script type="text/javascript" src="jquery-2.2.4.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
	
		<div class="container div_container">
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
					<li> <a href="sobre.php"> Sobre </a></li>		
			        <li> <a href="pag-login.php">  Login </a> </li>
					<?php } ?>
				</ul>
			</div>
			<div class="div_conteudo col-xs-12">
			<?php if(isset($_SESSION["Usuario"])){ ?>
				<h3> Seja Bem vindo, <small> <?php echo $_SESSION["Usuario"]; ?> </small></h3>
			<?php }else{
				echo "<h3> Conheça um pouco mais sobre o sistema!! </h3>";
				} ?>
<!-- INICIO CAROUSEL -->			
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="ico.jpg" alt="...">
      <div class="carousel-caption">
        ICO ESTACIONAMENTO
      </div>
    </div>
    <div class="item">
      <img src="multipark.jpg" alt="...">
      <div class="carousel-caption">
        MULTIPARK ESTACIONAMENTO
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- FIM CAROUSEL -->

<!-- INICIO EXEMPLO -->	
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
      </div>
    </div>

    <div class="">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Contato</h2>
          <img src="contato.png" alt="">
          <p>Entre em contato sobre orçamentos, duvidas e sugestões. </p>
          <p><a class="btn btn-default" href="contato.php" role="button"> Entrar em Contato »</a></p>
        </div>
        <div class="col-md-4">
          <h2>Sobre</h2>
          <p> Conheça um pouco sobre nossa história. </p>
          <p><a class="btn btn-default" href="sobre.php" role="button"> Visitar »</a></p>
       </div>
        <div class="col-md-4">
          <h2>Faça Seu Orçamento</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
      </div>

      <hr>

<!-- FINAL EXEMPLO -->	
			</div>	
			<div class="div_rodape"> 
				<SPAN> Slater IT Developer's 2016 - Todos os direitos reservados. </SPAN>
			</div>
		</div>
	</body>

	
	