<?php
	include("conexao.php");

	$email = $_POST['txEmailCuidador'];
	$senha = $_POST['txSenhaCuidador'];
    $nome = $_POST['txNomeCuidador'];
    $idade = $_POST['txIdadeCuidador'];
    $sexo = $_POST['txSexoCuidador'];
    $disp = $_POST['txDispCuidador'];
    $tel = $_POST['txTelCuidador'];
    $cep = $_POST['txCepCuidador'];
    $estado = $_POST['txEstadoCuidador'];
    $cidade = $_POST['txCidadeCuidador'];
    $bairro = $_POST['txBairroCuidador'];
    $infoProf = $_POST['infoProfissional'];
    $cursos = $_POST['textCursos'];


	try{
        $stmt = $conn->prepare("INSERT INTO usuario VALUES (null, '$email', '$senha', '$nome', '$idade', '$sexo', '$cep', '$estado', '$cidade', '$bairro', '$tel', '$disp', '$infoProf',  '$cursos');");
        $stmt -> execute();

        header("location:../view/login-cuidador.php");
    }
	catch(PDOException $e){
		echo "Erro: " . $e -> getMessage();
    }

?>

