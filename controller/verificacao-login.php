<?php


if(!$_SESSION['usuario']){
  header('location: login-cuidador.php');

  exit();
}

?>
