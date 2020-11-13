<?php
	$host="localhost";
	$usuario = "root";
	$senha="";
	$bd="bdoldfriend";


	$conn = new mysqli($host, $usuario, $senha, $bd);
<<<<<<< HEAD

	$conexao= mysqli_connect($host,$usuario,$senha,$bd);

	$connFiltro = new PDO("mysql:host=$host;dbname=$bd",$usuario,$senha); 
=======
>>>>>>> 51b40073595f9ffa63859ecf5862a732b329ed2b
?>
