<?php
session_start(); 
require('conexao.php');

$curriculo = $_POST['alterCurriculo'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET curriculo = '$curriculo' WHERE email = '{$_SESSION['usuario']}';");
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