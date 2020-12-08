<?php
session_start(); 
require('conexao.php');

$estado = $_POST['alterEstado'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET estado = '$estado' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	echo ("<script>	window.alert('Estado alterado com sucesso!');
	window.location.href='../view/painel.php';</script>");	
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>