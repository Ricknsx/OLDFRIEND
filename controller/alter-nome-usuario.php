<?php
session_start(); 
require('conexao.php');

$nome = $_POST['alterNome'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET nome = '$nome' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	session_destroy();
	echo ("<script>	window.alert('Nome alterado com sucesso! Realize o Login novamente!');
	window.location.href='../view/painel.php';</script>");	

}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>