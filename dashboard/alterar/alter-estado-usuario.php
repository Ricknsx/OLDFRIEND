<?php
session_start(); 
require('../conexao/conexao.php');

$id= $_GET['id'];
$estado = $_POST['alterEstado'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET estado = '$estado' WHERE  idusuario='$id';");
	$stmt -> execute();

	echo ("<script>	window.alert('Estado alterado com sucesso!');
             window.location.href='alterar.php?id=$id';</script>");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>