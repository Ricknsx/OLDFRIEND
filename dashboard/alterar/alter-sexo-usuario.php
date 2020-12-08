<?php
session_start(); 
require('../conexao/conexao.php');

$id= $_GET['id'];
$sexo = $_POST['alterSexo'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET sexo = '$sexo' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	echo ("<script>	window.alert('Sexo alterado com sucesso!');
             window.location.href='alterar.php?id=$id';</script>");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>