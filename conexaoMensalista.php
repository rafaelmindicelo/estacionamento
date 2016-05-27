<?php
session_start ();
include ("sairPagina.php");
sairPagina ();
?>
<!DOCTYPE html>
<html>
<head>
<title>Where's My Car - Cadastro de Mensalista</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="_css/style-cadMensal.css" type="text/css"
	media="all" />
</head>
<body>
	<div id="div_Container">
		<div id="div_Topo">
			<img id="imageTOPO" src="_imagens/toposite.png" alt="Imagem Logo" />

		</div>

		<div id="div_Menu">
			<ul>
		    	<?php
							if (isset ( $_SESSION ["Usuario"] )) {
								?>
				<li><a href="panel.php"> Painel </a></li>
				<li><a href="panel.php?func=cadUsuario"> Cadastro Usuário </a></li>
				<li><a href="cadMensal.php"> Cadastro Mensalista </a></li>
				<li><a href="entradasaida.php"> Entrada </a></li>
				<li><a href="panel.php?func=Usuarios"> Usuários </a></li>
				<li><a href="index.php?func=sairPagina">  Sair ( <?php echo $_SESSION["Usuario"]; ?> ) </a>
				</li>
				<?php } else { ?>
				<li><a href="index.php"> Início </a></li>
				<li><a href="contato.php"> Contato </a></li>
				<li><a href="registro.php"> Registro </a></li>
				<li><a href="pag-login.php"> Login </a></li>
				<?php } ?>
			</ul>
		</div>

<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "estacionamento";

$link = mysql_connect ( $servidor, $usuario, $senha ) or die ( 'Não foi possível conectar: ' . mysql_error () );

$select = mysql_select_db ( $banco );

if ($_REQUEST ["acao"] == "adicionar") {
	$sql = "INSERT INTO MENSALISTA (
			COD_CLIENTE, DATA_CADASTRO, NM_CLIENTE, DT_NASC, CPF, SEXO, 
			LOGRADOURO, CEP, ESTADO, CIDADE, BAIRRO, TELEFONE, CELULAR, EMAIL) VALUES (";
	$sql .= "'" . $_REQUEST ["tCod"] . "', ";
	$sql .= "'" . $_REQUEST ["tData"] . "', ";
	$sql .= "'" . $_REQUEST ["tNome"] . "', ";
	$sql .= "'" . $_REQUEST ["tDataNasc"] . "', ";
	$sql .= "'" . $_REQUEST ["tCPF"] . "', ";
	$sql .= "'" . $_REQUEST ["tSexo"] . "', ";
	$sql .= "'" . $_REQUEST ["tEnd"] . "', ";
	$sql .= "'" . $_REQUEST ["tCep"] . "', ";
	$sql .= "'" . $_REQUEST ["tEst"] . "', ";
	$sql .= "'" . $_REQUEST ["tCid"] . "', ";
	$sql .= "'" . $_REQUEST ["tBairro"] . "', ";
	$sql .= "'" . $_REQUEST ["tTel"] . "', ";
	$sql .= "'" . $_REQUEST ["tCel"] . "', ";
	$sql .= "'" . $_REQUEST ["tEmail"] . "'";
	$sql .= ")";
	
	$result = mysql_query ( $sql );
	
	if (! result) {
		die ( 'Erro: ' . mysql_error () );
	} 

	else {
		echo 'A operação foi realizada com sucesso.';
	}
}
?>
<p><a href="cadMensal.php">Clique aqui para inserir um novo registro</a></p>
<div id="div_Rodape">
<SPAN> Slater It Developer's 2016 - Todos os direitos reservados. </SPAN>
		</div>
	</div>
</body>
</html>


