<?php
session_start(); 
require('conexao.php');

$cursos = $_POST['alterCursos'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET cursos = '$cursos' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	header("location:../view/painel.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

<script> alert("dados alterados com sucesso!");</script>
