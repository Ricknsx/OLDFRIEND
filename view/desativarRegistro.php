<?php session_start(); 
require('../controller/conexao.php');

$ID = $_GET['id'];

try{
	$stmt = $connFiltro->prepare("UPDATE usuario SET status = 1 WHERE idusuario = '$ID';");
	$stmt -> execute();

	header("location:painel.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

?>