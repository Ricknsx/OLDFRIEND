<?php
session_start(); 
require('../conexao/conexao.php');

$id= $_GET['id'];
$infoProf = $_POST['alterInfoProf'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET infoProfissional = '$infoProf' WHERE  idusuario='$id';");
	$stmt -> execute();

	echo ("<script>	window.alert('informações alteradas com sucesso!');
             window.location.href='alterar.php?id=$id';</script>");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>