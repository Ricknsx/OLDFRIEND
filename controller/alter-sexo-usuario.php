<?php
session_start(); 
require('conexao.php');

$sexo = $_POST['alterSexo'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET sexo = '$sexo' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	echo ("<script>	window.alert('Sexo alterado com sucesso!');
	window.location.href='../view/painel.php';</script>");	
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>