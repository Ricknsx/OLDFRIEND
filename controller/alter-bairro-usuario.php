<?php
session_start(); 
require('conexao.php');

$bairro = $_POST['alterBairro'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET bairro = '$bairro' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	header("location:../view/painel.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>