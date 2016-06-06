<?php
session_start ();
include ("sairPagina.php");
sairPagina ();
?>
<!DOCTYPE html>
<html>
<head>
<title>Where's My Car - Cadastro de Mensalista </title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="_css/style-cadMensal.css" type="text/css" media="all" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
		<script language="JavaScript" src="_js/validaForm.js"></script>
		<script language="JavaScript">
		function mascara(t, mask){
			 var i = t.value.length;
			 var saida = mask.substring(1,0);
			 var texto = mask.substring(i)
			 if (texto.substring(0,1) != saida)
			 {
				 t.value += texto.substring(0,1);
			 }
		}

		</script>
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"/>
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
		    	<li> <a href="panel.php?func=cadUsuario">  Cadastro Usuário </a> </li>
		    	<li><a href="cadMensal.php"> Cadastro Mensalista </a></li>
		    	<li> <a href="entradasaida.php">  Entrada </a> </li>
		    	<li> <a href="panel.php?func=Usuarios">  Usuários </a> </li>	
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

		<div id="div_Conteudo">
				<form name="formCadMens" method='POST' action='conexaoMensalista.php?acao=adicionar'> 
					<fieldset id="cCadastro">
					<legend>Cadastro</legend>
					<p><input type="text" id="cCod" name="tCod" size="4" placeholder="Codigo" hidden="cCod"/>
					<label for="cData">Data: </label><input type="date" id="cData" name="tData" "/></p>
					</fieldset>
					<fieldset id="cIdCliente">
						<legend>Identificação do Cliente</legend>
							<p><label for="cNome">Nome: </label><input type="text" id="cNome" name="tNome" size="30" autofocus="autofocus" placeholder="Nome Completo"/></p>
							<p><label for="cDataNasc">DataNasc.: </label><input type="date" id="cDataNasc" name="tDataNasc"/>
							<label for="cCPF">CPF: </label><input type="text" onkeypress="mascara(this, '000.000.000-00')" maxlength="14" id="cCPF" name="tCPF" placeholder="Digite o CPF" /></p>
					
							<fieldset id="cSexoCliente">
								<legend>Sexo</legend>
									<input type="radio" id="cMasc" name="tSexo"/><label for="cMasc">Masculino</label>
									<input type="radio" id="cFem" name="tSexo"/><label for="cFem">Feminino</label>
							</fieldset>
					</fieldset>
					
					<fieldset id="cEndCli">
					<legend>Endereço do Cliente</legend>
					<p><label for="cEnd">Endereço: </label><input type="text" id="cEnd" name="tEnd"	placeholder="Endereço Completo" size="50"/></p> 
					 
					<p><label for="cCep">CEP: </label><input type="text" id="cCep" size="9" maxlength="9" name="tCep" onkeypress="mascara(this, '#####-###')" placeholder="CEP" />
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
					<p><label for="cCid">Cidade: </label><input type="text" id="cCid" name="tCid" placeholder="Cidade"/>					
					<label for="cBairro">Bairro: </label><input type="text" id="cBairro" name="tBairro" placeholder="Bairro"/></p>
					</fieldset>
					<fieldset id="cContatoCliente">
					<legend>Contato do Cliente</legend>
					<p><label for="cTel">Tel: </label><input type="text" id="cTel" name="tTel" onkeypress="mascara(this, '00 0000-0000')" maxlength="14" placeholder="(__) ____-____"   />					
					<label for="cCel">Cel: </label><input type="text" id="cCel" name="tCel" onkeypress="mascara(this, '00 00000-0000')" maxlength="15" placeholder="(__) _____-____" /></p>
					<p><label for="cEmail">Email: </label><input type="email" id="cEmail" name="tEmail" placeholder="Digite o email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></p>
					</fieldset>
					<p><input type="reset" name="btLimpar" value="Limpar"/> 
					<input type="submit" onClick="validaForm();" name="btSalvar" value="Cadastrar"  /></p>

				</form>
			</div>

		<div id="div_Rodape">
			<SPAN> Slater It Developer's 2016 - Todos os direitos reservados. </SPAN>
		</div>
	</div>
</body>
</html>