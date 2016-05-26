<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "estacionamento";

$link = mysql_connect($servidor, $usuario, $senha)
or die('Não foi possível conectar: '.mysql_error());

$select = mysql_select_db($banco);

if($_REQUEST["acao"] == "adicionar")
{
	$sql = "INSERT INTO MENSALISTA (
			COD_CLIENTE, DATA_CADASTRO, NM_CLIENTE, DT_NASC, CPF, SEXO, 
			LOGRADOURO, CEP, ESTADO, CIDADE, BAIRRO, TELEFONE, CELULAR, EMAIL) VALUES (";
	$sql .= "'".$_REQUEST["tCod"]."', ";
	$sql .= "'".$_REQUEST["tData"]."', ";
	$sql .= "'".$_REQUEST["tNome"]."', ";
	$sql .= "'".$_REQUEST["tDataNasc"]."', ";
	$sql .= "'".$_REQUEST["tCPF"]."', ";
	$sql .= "'".$_REQUEST["tSexo"]."', ";
	$sql .= "'".$_REQUEST["tEnd"]."', ";
	$sql .= "'".$_REQUEST["tCep"]."', ";
	$sql .= "'".$_REQUEST["tEst"]."', ";
	$sql .= "'".$_REQUEST["tCid"]."', ";
	$sql .= "'".$_REQUEST["tBairro"]."', ";
	$sql .= "'".$_REQUEST["tTel"]."', ";
	$sql .= "'".$_REQUEST["tCel"]."', ";
	$sql .= "'".$_REQUEST["tEmail"]."', ";								
	$sql .= ")";
	
	$result = mysql_query($sql);
	
	if (!result)
	{ die('Erro: ' .mysql_error()); }
	
	else
	{ echo 'A operação foi realizada com sucesso.';}
}

