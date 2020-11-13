<?php
session_start(); 
require('conexao.php');

$disp = $_POST['alterDisp'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET disponibilidade = '$disp' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	header("location:../view/painel.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>