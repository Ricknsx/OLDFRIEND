<?php
session_start(); 
require('conexao.php');

$email = $_POST['alterEmail'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET email = '$email' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	session_destroy();
	echo ("<script>	window.alert('Email alterado com sucesso! Realize o Login novamente!');
	window.location.href='../view/painel.php';</script>");	
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>