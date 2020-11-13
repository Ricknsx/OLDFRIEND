<?php
session_start(); 
require('conexao.php');

$email = $_POST['alterEmail'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET email = '$email' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	session_destroy();
	header("location:../view/login-cuidador.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>