<?php
session_start();
include('conexao.php');

if(empty($_POST['loginCliente']) || empty($_POST['senhaCliente'])){
    header('location: ../view/login-cuidador.php');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['loginCliente']);
$senha = mysqli_real_escape_string($conn, $_POST['senhaCliente']);

$query = "SELECT idusuario, email, niveis_acesso FROM usuario WHERE email = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

$nvlAcesso= mysqli_fetch_assoc($result);

if($nvlAcesso['niveis_acesso'] == "adm"){
  header('location: ../dashboard');
}
else{
  if($row ==1 ){
    $_SESSION['usuario'] = $usuario;
    header('location: ../view/painel.php');
    exit();
  }else{
    header('location: ../view/login-cuidador.php');
    exit();
  }
}
?>