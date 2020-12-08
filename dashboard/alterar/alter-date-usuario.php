<?php
session_start(); 
require('../conexao/conexao.php');

$id= $_GET['id'];
$idade = $_POST['alterDate'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET idade = '$idade' WHERE  idusuario='$id';");
	$stmt -> execute();

	echo ("<script>	window.alert('Data alterada com sucesso!');
             window.location.href='alterar.php?id=$id';</script>");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>