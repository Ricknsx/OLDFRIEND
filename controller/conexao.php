<?php
	$host="localhost";
	$usuario = "root";
	$senha="";
	$bd="bdoldfriend";


	$conn = new mysqli($host, $usuario, $senha, $bd);

	$conexao= mysqli_connect($host,$usuario,$senha,$bd);

	$connFiltro = new PDO("mysql:host=$host;dbname=$bd",$usuario,$senha); 
?>
