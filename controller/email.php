<?php
	require("../controller/conexao.php");
    
    $nome = $_POST['txNomeContato'];
    $email = $_POST['txEmailContato'];

    $assunto = "Duvida - Old Friend";
    $assunto_codificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'Q', quoted_printable_encode($assunto));	
    
    $conteudo ='
                Usuário: '.$nome.'
                E-mail: '.$email .'
                
                Mensagem: "'.$_POST["txMensagemContato"].'"
                ';
    
    require_once('class.phpmailer.php'); //chama a classe de onde você a colocou.
    
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;

    $mail->Username = 'contato.oldfriend1@gmail.com';
    $mail->Password = 'oldfriend2020';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('contato.oldfriend1@gmail.com', 'Old Friend');
    $mail->SingleTo = true; 

    $mail->addAddress("contato.oldfriend1@gmail.com"); // email do destinatario.

    $mail->Subject = $assunto_codificado;
    $mail->Body = $conteudo;

    if(!$mail->Send()){
        echo "Erro ao enviar Email:" . $mail->ErrorInfo;			
    }
    else{				
        $url='../view/confirma-envio.php';
        echo("<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>");
        exit();	
    } 
?>