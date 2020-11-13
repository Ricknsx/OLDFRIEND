<?php
session_start();
include('conexao.php');

if(empty($_POST['loginCliente']) || empty($_POST['senhaCliente'])){
    header('location: ../view/login-cuidador.php');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['loginCliente']);
$senha = mysqli_real_escape_string($conn, $_POST['senhaCliente']);

$query = "SELECT idusuario, email FROM usuario WHERE email = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);


if($row ==1 ){
  $_SESSION['usuario'] = $usuario;
  header('location: ../view/painel.php');
  exit();
}else{
  header('location: ../view/login-cuidador.php');
  exit();
}
?>
