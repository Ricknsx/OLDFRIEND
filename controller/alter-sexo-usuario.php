<?php
session_start(); 
require('conexao.php');

$sexo = $_POST['alterSexo'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET sexo = '$sexo' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	header("location:../view/painel.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>