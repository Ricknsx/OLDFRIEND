<?php
session_start(); 
require('conexao.php');

$tel = $_POST['alterTel'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET telefone = '$tel' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	header("location:../view/painel.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>