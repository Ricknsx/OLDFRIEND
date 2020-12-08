<?php
	session_start();
	include_once("conexao/conexao.php");
	//Verifica se os campos possuem dados 
	if((isset($_POST['txt_usuario'])) && (isset($_POST['txt_senha']))){
		$usuario = $_POST['txt_usuario']; 
		$senha = $_POST['txt_senha'];

		
		$result_usuario = "SELECT * FROM usuario WHERE email = '$usuario' && senha = '$senha'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrando um usuário na tabela usuario com os mesmos dados digitado pelo usuario
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['idusuario'];
			echo $_SESSION['usuarioID'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			if($_SESSION['usuarioNiveisAcessoId'] == "adm"){
				header("Location: administrativo.php");
			}else{
				$_SESSION['loginErro'] = "Acesso Negado";
				header("Location: index.php");
			}
		}else{
			$_SESSION['loginErro'] = "Usuário ou senha inválido";
			header("Location: index.php");
		}
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}
?>  