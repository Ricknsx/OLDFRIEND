<?php session_start(); 
require('conexao/conexao.php');

$ID = $_GET['id'];
$foto = $_GET['foto'];

if($foto != ""){
	try{
	$stmt = $connAtivar->prepare("UPDATE usuario SET status = 0 WHERE idusuario = '$ID';");
	$stmt -> execute();

	header("location:administrativo.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}
}
else{
	echo ("<script>	window.alert('Falha ao ativar: usuário sem foto de perfil!!!');
                window.location.href='administrativo.php';</script>");
    }



?>