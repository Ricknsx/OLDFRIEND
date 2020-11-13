<?php
session_start(); 
require('conexao.php');

$idade = $_POST['alterDate'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET idade = '$idade' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	header("location:../view/painel.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>