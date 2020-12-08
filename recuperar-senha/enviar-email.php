<?php
		
		require("../controller/conexao.php");

		$nome = $_POST['txNome'];
		$email = $_POST['txEmail'];

		$dadosUsuario = "SELECT * FROM usuario WHERE email = '$email'";
		$resultado = mysqli_query($conn, $dadosUsuario);
		while ($row = mysqli_fetch_assoc($resultado)) {
	
		$assunto_codificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'Q', quoted_printable_encode("OLD FRIEND - RECUPERACAO DE SENHA"));
		$senhaUser = $row['senha'];
		$conteudo = "
		 Sua senha atual é: " . $row['senha'] . " 
		
		               ***ATENÇÃO*** 
		 Caso você não tenha solicitado a recuperação da sua senha no site Old Friend, 
		 altere a sua senha na plataforma para evitar qualquer tipo de invasão, se isso 
		 continuar vá em nosso site na aba de contato e fale conosco, retornaremos o mais 
		 rápido possível!
		 
		 - Equipe Old Friend -";
		
		require_once('class.phpmailer.php');
		
		$mail = new PHPMailer;

		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->CharSet = 'UTF-8';
		$mail->SMTPAuth = true;

		$mail->Username = 'Contato.oldfriend1@gmail.com';
		$mail->Password = 'oldfriend2020';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;

		$mail->setFrom('Contato.oldfriend1@gmail.com', 'Equipe - Old Friend');
		$mail->SingleTo = true; 

		$mail->addAddress("$email"); // email do destinatario.

		$mail->Subject = $assunto_codificado;
		$mail->Body = $conteudo;

		if(!$mail->Send()){
			echo "Erro ao enviar Email:" . $mail->ErrorInfo;			
		}
		else{			
			echo "<script> alert('E-mail de recuperacao de senha enviado com sucesso!')</script>";			
			$url='../index.php';
			echo("<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>");
			exit();	
		}
		
	}
?>