<?php 
	error_reporting(false);
	function sairPagina() {
		if($_GET["func"] && $_GET["func"] == "sairPagina") {
			session_destroy();
			echo "<script> alert('Voce saiu com sucesso!'); location.href='index.php'</script>";
		}
	}
?>