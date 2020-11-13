<?php
session_start(); 
require('conexao.php');

$infoProf = $_POST['alterInfoProf'];

try{
	$stmt = $conn->prepare("UPDATE usuario SET infoProfissional = '$infoProf' WHERE email = '{$_SESSION['usuario']}';");
	$stmt -> execute();

	header("location:../view/painel.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}

 ?>

 <script> alert('email alterado para' + '$email');</script>