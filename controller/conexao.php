<?php	
	$servidor="localhost";
	$banco="tCuidador";
	$usuario="root";
	$senha="";
	
	$conn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha); 

	$conexao= mysqli_connect($servidor,$usuario,$senha,$banco);

?>