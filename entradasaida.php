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
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">

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
		<link rel="stylesheet" href="style-index.css" type="text/css" media="all" />
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
			<div class="div_boxe col-xs-12">
				<img src="entradaesaida.jpg" alt="...">
			</div>
		      
		    </div>

		</nav>
	</div>
	
		<div class='div_conteudo col-xs-12' style="margin-top: 20px">
			<div class='div_entradasaida col-md-8 col-md-offset-2' style="">				
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
						<div class='col-md-3 margin-top-30' style="margin-top: 20px">
							<input class='button form-control' type='submit' name="entrada" value='entrada'>
						</div>
						<div class='col-md-3 margin-top-30' style="margin-top: 20px">
							<input class='button form-control col-md-3' type='submit' name="saida" value='saida'>
						</div>
						<div class='col-md-3 margin-top-30' style="margin-top: 20px">
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
				</div>
				<div class="div_rodape"> 
				<SPAN> Slater IT Developer's 2015 - Todos os direitos reservados. </SPAN>
				</div>	
			</div>		
	</body>
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

