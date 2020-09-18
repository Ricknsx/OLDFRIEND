<?php include('conexao.php');

if(empty($_POST['loginCliente']) || empty($_POST['senhaCliente'])){
    header('location:../index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['loginCliente']);
$senha = mysqli_real_escape_string($conexao, $_POST['senhaCliente']);

$query = "SELECT idusuario, email FROM usuario WHERE email = '{$usuario}' and senha = '{$senha}'";
?>