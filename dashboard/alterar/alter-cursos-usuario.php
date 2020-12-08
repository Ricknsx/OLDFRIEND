<?php
session_start(); 
require('../conexao/conexao.php');

$id= $_GET['id'];
$cursos = $_POST['alterCursos'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET cursos = '$cursos' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	echo ("<script>	window.alert('Cursos alterados com sucesso!');
             window.location.href='alterar.php?id=$id';</script>");	
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

<script> alert("dados alterados com sucesso!");</script>
