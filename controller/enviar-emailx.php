<?php

if (isset($_POST['txEmailContato']) && !empty($_POST['txEmailContato'])) {


$nome = addslashes ($_POST['txNomeContato']);
$email = addslashes ($_POST['txEmailContato']);
$mensagem = addslashes ($_POST['txMensagemContato']);

$to = "ricardon258@outlook.com";
$subject = "Contato - Oldfriend";
$body = "Nome: ".$nome. "\n"
        ."Email: ".$email. "\n"
        ."Mensagem: ".$mensagem. "\n";

$header = "From:ricardon258@gmail.com"."\n"
          ."Reply-To".$email."\n"
          ."X=mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

  echo("E-mail enviado com sucesso!");

}else {
  echo ("O E-mail nao pode ser enviado");
}
}
 ?>