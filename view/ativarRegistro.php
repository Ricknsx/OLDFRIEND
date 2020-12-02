<?php session_start(); 
require('../controller/conexao.php');

$ID = $_GET['id'];
$foto = $_GET['foto'];

if($foto != ""){
	try{
	$stmt = $connFiltro->prepare("UPDATE usuario SET status = 0 WHERE idusuario = '$ID';");
	$stmt -> execute();

	header("location:painel.php");
}
catch(PDOException $e){
	echo "ERRO: " . $e -> getMessage();
}
}
else{
	echo ("<script>	window.alert('Falha ao ativar: usuário sem foto de perfil!!!');
                window.location.href='../view/painel.php';</script>");
    }



?>