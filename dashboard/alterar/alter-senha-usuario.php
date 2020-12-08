<?php
session_start(); 
require('../conexao/conexao.php');

$id= $_GET['id'];
$senha = $_POST['alterSenha'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET senha = '$senha' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	echo ("<script>	window.alert('Senha alterada com sucesso!');
             window.location.href='alterar.php?id=$id';</script>");

}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>