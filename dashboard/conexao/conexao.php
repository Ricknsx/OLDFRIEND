<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "bdoldfriend";
	
	//Criar a conexão
	$connAtivar = new PDO("mysql:host=$host;dbname=$bd",$usuario,$senha);
	
	$conexao= mysqli_connect($host,$usuario,$senha,$bd);
	$conn = mysqli_connect($host, $usuario, $senha, $bd);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
?>
