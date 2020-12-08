<?php
session_start(); 
require('conexao.php');

$senha = $_POST['alterSenha'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET senha = '$senha' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	session_destroy();
	echo ("<script>	window.alert('Senha alterada com sucesso!Realize o Login Novamente!');
	window.location.href='../view/painel.php';</script>");	

}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>