<?php
session_start(); 
require('../conexao/conexao.php');

$id= $_GET['id'];
echo $id;
try{
	$stmt = $conn->prepare("DELETE FROM usuario where idusuario='$id';");
	$stmt -> execute();

	echo ("<script>	window.alert('Usuario Deletado!!!');
             window.location.href='../administrativo.php';</script>");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>