<?php
session_start(); 
require('conexao.php');

$cidade = $_POST['alterCidade'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET cidade = '$cidade' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	/*echo "<script> alert('email alterado para' + '$email');</script>";*/
	session_destroy();
	header("location:../view/login-cuidador.php");

}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>