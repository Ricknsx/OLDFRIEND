<?php
session_start(); 
require('../conexao/conexao.php');

$id= $_GET['id'];
$cidade = $_POST['alterCidade'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET cidade = '$cidade' WHERE  idusuario='$id';");
	$stmt -> execute();

	echo ("<script>	window.alert('Cidade alterada com sucesso!');
             window.location.href='alterar.php?id=$id';</script>");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>