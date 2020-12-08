<?php
    session_start();
	require("../conexao/conexao.php");

	$erro = 0;
	
			if(isset($_FILES["txImagemPerfil"])){
				$arqNome = $_FILES["txImagemPerfil"]["name"];
				$arqTipo = $_FILES["txImagemPerfil"]["type"];
				$arqTamanho = $_FILES["txImagemPerfil"]["size"];
				$arqNomeTemp = $_FILES["txImagemPerfil"]["tmp_name"];
				$erro = $_FILES["txImagemPerfil"]["error"];
				
				if($erro==0){
					if(is_uploaded_file($arqNomeTemp)){
						if(move_uploaded_file($arqNomeTemp,"../imgPerfil/". $arqNome)){
							//echo "Sucesso!";
									
							
							$imagemPerfil = '../imgPerfil/' .$arqNome;
		
								try {
									//Linha SQL	
									$stmt = $connAtivar->prepare("UPDATE usuario SET foto = '$imagemPerfil' WHERE email = '{$_SESSION['usuario']}';");  
									$stmt->execute();				 				 
									
                                    echo ("<script>	window.alert('foto inserida com sucesso!');
                                                    window.location.href='../administrativo.php';</script>");							
									
								}catch(PDOException $e) {
									echo 'Error: ' . $e->getMessage();
								}
											
						}
						else{
							$erro = "Falha ao mover o arquivo";
						}
					}
					else{
						$erro = "Erro no envio: arquivo não recebido.";
					}
									
				}
				else{
					$erro = "Erro no envio: " . $erro;			
				}								
			}
			else{
				$erro = "Arquivo enviado não encontrado";
			}
?>