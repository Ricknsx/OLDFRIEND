<?php
session_start(); 
require('../conexao/conexao.php');

$id= $_GET['id'];
$disp = $_POST['alterDisp'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET disponibilidade = '$disp' WHERE  idusuario='$id';");
	$stmt -> execute();

	echo ("<script>	window.alert('Disponibilidade alterada com sucesso!');
             window.location.href='alterar.php?id=$id';</script>");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>