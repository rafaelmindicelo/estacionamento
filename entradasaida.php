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
		<link rel="stylesheet" href="_css/styleEntradaSaida.css"/>
		<meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="_js/webcam.js"></script>
        <script type="text/javascript">
            //Configurando o arquivo que vai receber a imagem
            webcam.set_api_url('upload.php');

            //Setando a qualidade da imagem (1 - 100)
            webcam.set_quality(90);

            //Habilitando o som de click
            webcam.set_shutter_sound(true);

            //Definindo a função que será chamada após o termino do processo
            webcam.set_hook('onComplete', 'my_completion_handler');

            //Função para tirar snapshot
            function take_snapshot() {
                document.getElementById('upload_results').innerHTML = '<h1>Uploading...</h1>';
                webcam.snap();
            }

            //Função callback que será chamada após o final do processo
            function my_completion_handler(msg) {
                if (msg.match(/(http\:\/\/\S+)/)) {
                    var htmlResult = '<h1>Upload Successful!</h1>';
                    htmlResult += '<img src="'+msg+'" />';
                    document.getElementById('upload_results').innerHTML = htmlResult;
                    webcam.reset();
                }
                else {
                    alert("PHP Erro: " + msg);
                }
            }
        </script>
		<link rel="stylesheet" href="_css/style-index.css" type="text/css" media="all" />
		 <script>
function timer()
{
        var d = new Date();
        document.getElementById('date').innerHTML = d.toLocaleTimeString();
       
        setTimeout('timer()', 1000);
}
</script>

	</head>
	<body onload="timer()">
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
				<form action="cadUsuario.php" method="post">

<br>
<br>
	<tbody>
	<tr>

	<td width="69"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Código:</td>

	<td width="546"><input id="nome" maxlength="20" name="nome" size="10" type="text" />



	</tr>

	<td width="69"> Placa:&nbsp;&nbsp;</td>

	<td width="546"><input id="placa" maxlength="20" name="placa" size="10" type="text" />

	

	</tr>

	<tr>

	<td>Mensalista(?):</td>

	<td><select id="escolhMensa" name="escolhaMensa">

		<option>Selecione...</option>
		<option value="SIM">SIM</option>
		<option value="NÃO">NÃO</option>
		
		</select>

	
	
</tr>

<br>
<br>
<tr>

	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marca:&nbsp;&nbsp;</td>

	<td><select id="escolhaMarca" name="escolhaMarca">

		<option>Selecione...</option>
		<option value="Fiat">Fiat</option>
		<option value="Chevrolet">Chevrolet</option>
		
		</select>

</tr>
<tr>

	<td>&nbsp;&nbsp;Modelo:</td>

	<td><select id="escolhaModel" name="escolhaModel">

		<option>Selecione...</option>
		<option value="Uno">Uno</option>
		<option value="Onix">Onix</option>
		
		</select>

</tr>

<tr>

	<td>Funcionário:</td>
	<td><input id="funcionario" maxlength="23" name="funcionario" type="text" size="12">

		

</tr> 

<tr>  

<br>
<br>

<tr>

	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data In:</td>
    <td><input id="dEntrada" maxlength="8" name="dEntrada" type="datetime-local" size="10" />

    	

</tr>  

<tr>

	<td><div id="date"></div></td>
	
</tr> 

<table>

       <tr>
                 <td align='center'><input type='submit' value='Entrada' onclick =  "???" class="entrada" /></td>        
                 <td align='center'><input type='button' value='Saída' onclick =  "???" class="saida" /></td>
                 <td align='center'><input type='reset' value='Limpar' onclick =  "???" class="limpar" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                 <td align='center'><input type='button' value='Voltar' onclick =  "index.php" class="voltar" /></td>
           </tr>
   </table>

   <table>

   		<div id="camera">

   	<script type="text/javascript">

   	
            //Instanciando a webcam. O tamanho pode ser alterado
            document.write(webcam.get_html(230, 220));

           
        </script>
        
</div>
        	
        <form>
            <input type=button value="Configurar" onClick="webcam.configure()" class="cameraConf">
            &nbsp;&nbsp;
            <input type=button value="Tirar Foto" onClick="take_snapshot()" class="cameraTirar">
            &nbsp;&nbsp;
            <input type=button value="Reset" onClick="webcam.reset()" class="cameraReset">
        </form>
        <div id="upload_results"></div>
    
    
			</div>	



</html>


