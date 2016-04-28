<?php
session_start ();
include ("sairPagina.php");
sairPagina ();
?>
<!DOCTYPE html>
<html>
<head>
<title>Where's My Car - Cadastro de Mensalista </title>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="_css/style-cadMensal.css" type="text/css" media="all" />
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
		    	<li><a href="index.php"> Inicio </a></li>
				<li><a href="contato.php"> Contato </a></li>
				<li><a href="panel.php"> Painel </a></li>
				<li><a href="index.php?func=sairPagina">  Sair ( <?php echo $_SESSION["Usuario"]; ?> ) </a>
				</li>
				<?php } else { ?>
				<li><a href="index.php"> Inicio </a></li>
				<li><a href="contato.php"> Contato </a></li>
				<li><a href="registro.php"> Registro </a></li>
				<li><a href="pag-login.php"> Login </a></li>
				<?php } ?>
			</ul>
		</div>

		<div id="div_Conteudo">
				<form action="" method="POST">
					<fieldset id="cCadastro">
					<legend>Cadastro</legend>
					<p><label for="cCod">Cod Cliente: </label><input type="text" id="cCod" name="tCod" size="4" placeholder="Codigo">
					<label for="cData">Data: </label><input type="date" id="cData" name="tData"/></p>
					</fieldset>
					<fieldset id="cIdCliente">
					<legend>Identificação do Cliente</legend>
					<p><label for="cNome">Nome: </label><input type="text" id="cNome" name="tNome" size="30" placeholder="Nome Completo"></p>
					<p><label for="cDataNasc">DataNasc.: </label><input type="date" id="cDataNasc" name="tDataNasc"/>
					<label for="cCPF">CPF: </label><input type="text" id="cCPF" name="tCPF" size="11" maxlength="11" placeholder="Digite o CPF"></p>
					
					<fieldset id="cSexoCliente">
					<legend>Sexo</legend>
					<input type="radio" id="cMasc" name="tSexo"/><label for="cMasc">Masculino</label>
					<input type="radio" id="cFem" name="tSexo"/><label for="cFem">Feminino</label>
					</fieldset>
					</fieldset>
					
					<fieldset id="cEndCli">
					<legend>Endereço do Cliente</legend>
					<p><label for="cEnd">Logradouro: </label><input type="text" id="cEnd" name="tEnd"	placeholder="Rua, Avenida, Travessa"> 
					<label for="cNum">Número: </label><input	type="text" id="cNum" name="tNum" size="6" placeholder="Numero"></p> 
					<p><label for="cComp">Compl.: </label><input type="text" id="cComp" name="tComp" size="10" placeholder="casa, apt...">
					<label for="cCep">CEP: </label><input type="text" id="cCep" size="8" maxlength="8" name="tCep" placeholder="CEP">
					<label for="cEst">Estado: </label><select id="cEst" name="tEst">
							<option value="">Selecione</option>
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="ES">Espirito Santo</option>
							<option value="GO">Goiás</option>
							<option value="MA">Maranhão</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MT">Mato Grosso</option>
							<option value="MG">Minas Gerais</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraíba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RO">Rondônia</option>
							<option value="RR">Roraima</option>
							<option value="SC">Santa Catarina</option>
							<option value="SP">São Paulo</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
						</select></p>
					<p><label for="cCid">Cidade: </label><input type="text" id="cCid" name="tCid" placeholder="Cidade">					
					<label for="cBairro">Bairro: </label><input type="text" id="cBairro" name="tBairro" placeholder="Bairro"></p>
					</fieldset>
					<fieldset id="cContatoCliente">
					<legend>Contato do Cliente</legend>
					<p><label for="cTel">Telefone: </label><input type="tel" id="cTel" name="tTel" placeholder="Telefone com DDD">					
					<label for="cCel">Celular: </label><input type="tel" id="cCel" name="tCel" placeholder="Celular com DDD"></p>
					<p><label for="cEmail">Email: </label><input type="email" id="cEmail" name="tEmail" placeholder="Digite o email" /></p>
					</fieldset>
					<p><input type="submit" value="Salvar" /></p>
				</form>
			

		</div>

		<div id="div_Rodape">
			<SPAN> Slater It Developer's 2015 - Todos os direitos reservados. </SPAN>
		</div>
	</div>
</body>
</html>


<?php
/*
 * if (isset ($_POST["iButton"])) {
 * $iNome = $_POST["iNome"];
 * $iAssunto = $_POST["iAssunto"];
 * $iEmail = $_POST["iEmail"];
 * $iTexto = $_POST["iTexto"];
 *
 * if($iNome == "" || $iAssunto == "" || $iEmail == "" || $iTexto == "") {
 * echo "<script> alert('Preencha todos os campos'); location.href='contato.php'</script>";
 * }
 *
 * $CorpoEmAIL = "
 * E-mail: $iEmail
 * Nome = $iNome
 *
 * $iTexto
 *
 * ";
 * $Enviar = mail("contato@mycar.com.br", $iAssunto, $CorpoEmAIL);
 * echo "<script> alert('E-mail enviado com sucesso!'); location.href='contato.php'</script>";
 * }
 */
?>
		