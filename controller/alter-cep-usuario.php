<?php
session_start(); 
require('conexao.php');

$cep = $_POST['alterCep'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET cep = '$cep' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	header("location:../view/painel.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>