<?php session_start(); 
require('conexao/conexao.php');

$ID = $_GET['id'];

try{
	$stmt = $connAtivar->prepare("UPDATE usuario SET status = 0 WHERE idusuario = '$ID';");
	$stmt -> execute();

	header("location:administrativo.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

?>