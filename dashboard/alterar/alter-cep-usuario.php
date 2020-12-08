<?php
session_start(); 
require('../conexao/conexao.php');

$id= $_GET['id'];
$cep = $_POST['alterCep'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET cep = '$cep' WHERE  idusuario='$id';");
	$stmt -> execute();

	echo ("<script>	window.alert('CEP alterado com sucesso!');
             window.location.href='alterar.php?id=$id';</script>");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>