<?php
	function protegerPagina() {
		if(!isset($_SESSION["Usuario"])) {
			echo "<script> location.href='index.php' </script>";
		}
	}
?>