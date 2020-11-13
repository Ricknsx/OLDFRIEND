<?php
	require("../controller/conexao.php");
    
    $nome = $_POST['txNomeContato'];
    $email = $_POST['txEmailContato'];
    $emailCui= $_GET['emailCui'];
    $nomeCui= $_GET['nomeCui'];

    $assunto = "Interesse de Perfil - Old Friend";
    $assunto_codificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'Q', quoted_printable_encode($assunto));	
    
    $conteudo ='
                Ola,'.$nomeCui.'!
                Parece que alguem se interessou no seu perfil e deixou um recado!
                
                Remetente:' .$nome.'
                Contato: '.$email .'
                
                "'.$_POST["txMsgContato"].'"
                
                Caso haja interesse ou necessidade de contato, responda no email informado!
                
                O Old Friend Agradece!
                
                 -Equipe Old Friend
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

    $mail->addAddress($emailCui); // email do destinatario.

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