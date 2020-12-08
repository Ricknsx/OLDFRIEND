<?php
session_start(); 
require('../conexao/conexao.php');

$id= $_GET['id'];
$tel = $_POST['alterTel'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET telefone = '$tel' WHERE  idusuario='$id';");
	$stmt -> execute();

	echo ("<script>	window.alert('telefone alterado com sucesso!');
             window.location.href='alterar.php?id=$id';</script>");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>