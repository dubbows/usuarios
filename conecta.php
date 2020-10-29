<?php
	// conexão com o banco de dados

	$banco = "flex";
	$usuario = "";
	$senha = "";
	$hostname = "localhost";
	$conn = mysql_connect($hostname,$usuario,$senha); mysql_select_db($banco) or die ("Não foi possível conectar ao banco mysql");
		if (!$conn) {echo "Não foi possivel conectar ao banco mysql"; exit;}
		else {echo "parabéns! A conexão ao banco de dados ocorreu normalmente!";}

	mysql_close();

?>
