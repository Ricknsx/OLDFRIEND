<?php
session_start(); 
require('conexao.php');

$idade = $_POST['alterDate'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET idade = '$idade' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();
	echo ("<script>	window.alert('Data alterada com sucesso!');
             window.location.href='../view/painel.php';</script>");	
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>