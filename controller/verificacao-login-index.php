<?php


if(!$_SESSION['usuario']){
  header('location: view/login-cuidador.php');
  exit();
}

?>
