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
		<link rel="stylesheet" href="_css/style-cadMensal.css"/>
		<meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="_webcam/webcam.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
          <script src="_js/jquery.mask.min.js"></script>	
          
	    <script src="_js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
		<link rel="stylesheet" href="_css/bootstrap.css"/>
        <script type="text/javascript">  
        	$(document).ready(function(){
			  $('.placa').mask('AAA-0000');
			   $('#datetimepicker1').datetimepicker();
			});
            //Configurando o arquivo que vai receber a imagem
            webcam.set_api_url('_webcam/upload.php');

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
                    var htmlResult = '';
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
	<body>
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top cor1" role="navigation">

		    <div class="container-fluid">

		        <a class="navbar-brand" href="" style="padding:7px;">
		        	<img alt="Brand" src="_imagens/toposite.png" width="130" height="35">
		        </a>
				
				<ul class="nav nav-pills hidden-xs" role="tablist">
				    		<?php 
				    			if (isset ( $_SESSION ["Usuario"] )) {
						?>
						<li role="presentation"><a href="panel.php"> Painel </a></li>
				    	<li role="presentation"> <a href="panel.php?func=cadUsuario">  Cadastro Usu&aacute;rio </a> </li>
				    	<li role="presentation"><a href="cadMensal.php"> Cadastro Mensalista </a></li>
				    	<li role="presentation"> <a href="entradasaida.php">  Entrada </a> </li>
				    	<li role="presentation"> <a href="panel.php?func=Usuarios">  Usu&aacute;rios </a> </li>	
				    	<li role="presentation"><a href="index.php?func=sairPagina">  Sair ( <?php echo $_SESSION["Usuario"]; ?> ) </a>
						</li>
						<?php } else { ?>
						<li role="presentation"><a href="index.php"> In	&iacute;cio </a></li>
						<li role="presentation"><a href="contato.php"> Contato </a></li>
						<li role="presentation"><a href="registro.php"> Registro </a></li>
						<li role="presentation"><a href="pag-login.php"> Login </a></li>
							<?php } ?>
				</ul>

		      
		    </div>

		</nav>
	</div>
	<div class="container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-md-6 cor1 margin-top-20"><h1><span class='fa fa-cog' aria-hidden='true'></span> Entrada e Saida</h1></div>
        </div>

    </div>

		<div class='col-md-12 row'>
			<div class='col-md-8 col-md-offset-2'>				
    			<form action="" method="POST">
					
					<div class='col-md-8'>
						<div class="col-md-6">
							<label for="cPlaca">Placa</label>
							<input class='form-control placa' type="text" id="cPlaca" name="tPlaca" size="6" placeholder="AAA-9999">
						</div>
						<div class="col-md-6">
							<label for="cDataEnt">Tipo: </label>
							<select name="tTipo" class='form-control'>
								<option value="a">Avulso</option>
								<option value="m">Mensalista</option>
							</select>
						</div>
						<div class="col-md-6">
							<label for="cDataEnt">Data Entrada</label>
							<input type="date" class='form-control' id="cDataEnt" name="tDataEnt"/>
						</div>
						<div class="col-md-6">
							<label for="cDataSai">Hora Entrada</label>
							<input type="text" class='form-control' name="tHoraEntrada"/>
						</div>
						<div class="col-md-6">
							<label for="cDataSai">Data Saida</label>
							<input type="date" class='form-control' name="tDataSai"/>
						</div>
						<div class="col-md-6">
							<label for="cDataSai">Hora Saida</label>
							<input type="text" class='form-control' id="tHoraSaida" name="tHoraSaida"/>
						</div>
						
						<div class="col-md-12">
							<label for="cDataEnt">Marca: </label>
							<select name='tMarca'class='form-control'>
								<option value="1">Sim</option>
								<option value="2">Não</option>
								<option value="3">fwefwef</option>
							</select>
						</div>
						<div class="col-md-12">
							<label for="cDataEnt">Modelo: </label>
							<select name='tModelo' class='form-control'>
								<option value="1">Sim</option>
								<option value="2">Não</option>
								<option value="3">fwefwef</option>
							</select>
						</div>
						<div class='col-md-3 margin-top-30'>
							<input class='button form-control' type='submit' name="entrada" value='entrada'>
						</div>
						<div class='col-md-3 margin-top-30'>
							<input class='button form-control col-md-3' type='submit' name="saida" value='saida'>
						</div>
						<div class='col-md-3 margin-top-30'>
							<input class='button form-control col-md-3' type='button' value='Limpar'>
						</div>
					</div>	

					<div class='col-md-4'>
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
					</div>
					<div class='col-md-4 col-md-offset-8 margin-top-30' id="upload_results"></div>
				</form>				
		</div>

   		
        	

</html>
<?php 

	$mysqli = new mysqli($host, $user, $pass, $data);
	if ($mysqli->connect_error) {
		printf("ERRO MySQLi: %s\n", $mysqli->connect_error);
		exit();
	}

	if(isset($_POST['entrada'])){
		$placa = str_replace('-', '', $_POST['tPlaca']);

		$tipo = $_POST['tTipo'];
		$dataEnt = $_POST['tDataEnt'];
		$horaEnt = $_POST['tHoraEntrada'];
		$modelo = $_POST['tModelo'];
		$marca = $_POST['tMarca'];

		$dataEntrada =  $dataEnt ." ". $horaEnt;
		

			$sql = "SELECT cd_registro FROM tb_registro WHERE nm_placa = '$placa' and dt_saida is null";
			$result = $mysqli->query($sql);
			

			if ($result->num_rows > 0) {
				echo "Já existe uma entrada para esse veiculo";
			} else {
			    $sql = "INSERT INTO tb_registro (nm_placa, tp_cliente, dt_entrada, cd_modelo, cd_marca)
				VALUES ('$placa', '$tipo', '$dataEntrada', $modelo, $marca )";

				if (mysqli_query($mysqli, $sql)) {
				    echo "Entrada efetuada com sucesso";
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}


		mysqli_close($conn);
	}


	if(isset($_POST['saida'])){
		$placa = str_replace('-', '', $_POST['tPlaca']);
		$dataSai = $_POST['tDataSai'];
		$horaSai = $_POST['tHoraSaida'];

			$sql = "SELECT cd_registro, dt_entrada FROM tb_registro WHERE nm_placa = '$placa' and dt_saida is null";
			
			$result = $mysqli->query($sql);
			

			if ($result->num_rows > 0) {
				

			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			
				$sql_preco = "SELECT vl_preco FROM tb_valor WHERE dt_vigencia = (
						SELECT max(dt_vigencia) 
						FROM tb_valor 
						WHERE dt_vigencia <= '".$row["dt_entrada"]."')";				
				$result_preco = $mysqli->query($sql_preco);
				
				if ($result_preco->num_rows > 0) {				

				    // output data of each row
				    while($row_preco = $result_preco->fetch_assoc()) {
				    	$valorHora =  $row_preco['vl_preco'];
				    }
				}

				$dataSaida =  $dataSai ." ". $horaSai;
				

				$tempo = strtotime($dataSaida) - strtotime($row["dt_entrada"]);
				

				$tempoemhr =  (($tempo/60)/60); 
			

				$valor = $tempoemhr * $valorHora;


			    	$sql = "UPDATE tb_registro SET dt_saida = '".$dataSaida."', vl_pagto_avulso = '$valor'
					WHERE cd_registro = ".$row["cd_registro"] ;	

					if (mysqli_query($mysqli, $sql)) {
					    echo "Saida efetuada com sucesso";
					} else {
					    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}		        
			    }
			} else {
			    echo "Não existe uma entrada para esse veiculo";
			}


	}


?>

