<?php
session_start(); 
require('conexao.php');

$bairro = $_POST['alterBairro'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET bairro = '$bairro' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	echo ("<script>	window.alert('Bairro alterado com sucesso!');
             window.location.href='../view/painel.php';</script>");	
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>