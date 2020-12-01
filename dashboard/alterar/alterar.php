<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao/conexao.php");
	seguranca_adm();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../img/logo.ico">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

		<title>Administrativo - Old Friend</title>
		<link href="../css/style.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>

	</head>
    <body role="document">

  <!-- NAV BAR -->
  <nav class="navbar ">
  <a class="navbar-brand" href="../administrativo.php" ><img src="../../img/logoTipado.png" style="width:250px;height:50px;"></a>

  <div class="navbar-nav">
		<div class="navbar-form navbar-right">					
			<a href="../sair.php" class="btn-sair">Sair</a>
		</div>
    </div>
  </div>
</nav>
    <section class="conteudoPainelUsuario">
		<table class="table-dados">
			  
		<?php
        
        $id= isset($_GET['id'])?$_GET['id']:"";
		$dadosUsuario = "SELECT * FROM usuario WHERE idusuario = $id";
		$resultado = mysqli_query($conn, $dadosUsuario);
		while ($row = mysqli_fetch_assoc($resultado)) {

			
			  echo "<tbody>";
			  	echo"<tr>";
			  	  echo "<td scope='col'><b>E-mail :</b></td>";
			  	  echo "<td><b>$row[email]</b></td>";
			  	  echo "<td><form method='post' action='alter-email-usuario.php'><input type='text' name='alterEmail' required/><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Senha :</b></td>";
			  	  echo "<td><b>$row[senha]</b></td>";
			  	  echo "<td><form method='post' action='alter-senha-usuario.php'><input type='password' name='alterSenha' required/><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Nome :</b></td>";
			  	  echo "<td><b>$row[nome]</b>";
			  	  echo "<td><form method='post' action='alter-nome-usuario.php'><input type='text' name='alterNome' required/><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Nascimento :</b></td>";
			  	  echo "<td><b>$row[idade]</b></td>";
			  	  echo "<td><form method='post' action='alter-date-usuario.php'><input type='date' name='alterDate' required/><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Sexo :</b></td>";
			  	  echo "<td><b>$row[sexo]</b></td>";
			  	  echo "<td><form method='post' action='alter-sexo-usuario.php'><select class='custom-select' id='inputGroupSelect01' name='alterSexo' required>
                    <option value=''>selecione</option>
                    <option value='Masculino'>Masculino</option>
                    <option value='Feminino'>Feminino</option>
                </select><input type='submit' value='alterar' class='submit-alter-select'/></form></td>";
					echo"</tr>";
					
					echo"<tr>";
			  	  echo "<td scope='col'><b>Estado :</b></td>";
			  	  echo "<td><b>$row[estado]</b></td>";
			  	  echo "<td><form method='post' action='alter-estado-usuario.php'><select class='custom-select' id='inputGroupSelect01' name='alterEstado' required>
                    <option value=''>selecione</option>
					<option value='AC'>AC</option>
					<option value='AL'>AL</option>
					<option value='AP'>AP</option>
					<option value='AM'>AM</option>
					<option value='BA'>BA</option>
					<option value='CE'>CE</option>
					<option value='DF'>DF</option>
					<option value='ES'>ES</option>
					<option value='GO'>GO</option>
					<option value='MA'>MA</option>
					<option value='MT'>MT</option>
					<option value='MS'>MS</option>
					<option value='MG'>MG</option>
					<option value='PA'>PA</option>
					<option value='PB'>PB</option>
					<option value='PR'>PR</option>
					<option value='PE'>PE</option>
					<option value='PI'>PI</option>
					<option value='RJ'>RJ</option>
					<option value='RN'>RN</option>
					<option value='RS'>RS</option>
					<option value='RO'>RO</option>
					<option value='RR'>RR</option>
					<option value='SC'>SC</option>
					<option value='SP'>SP</option>
					<option value='SE'>SE</option>
                    <option value='TO'>TO</option>
                </select><input type='submit' value='alterar' class='submit-alter-select'/></form></td>";
			  	  echo"</tr>";			      

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Cidade :</b></td>";
			  	  echo "<td><b>$row[cidade]</b></td>";
			  	  echo "<td><form method='post' action='alter-cidade-usuario.php'><input type='text' name='alterCidade' required/><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";

				  echo"<tr>";
			  	  echo "<td scope='col'><b>CEP :</b></td>";
			  	  echo "<td><b>$row[cep]</b></td>";
			  	  echo "<td><form method='post' action='alter-cep-usuario.php'><input type='text' placeholder='exemplo: 12345-678' name='alterCep' required/><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Bairro :</b></td>";
			  	  echo "<td><b>$row[bairro]</b></td>";
			  	  echo "<td><form method='post' action='alter-bairro-usuario.php'><input type='text' name='alterBairro' required/><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";
			      
			      echo"<tr>";
			  	  echo "<td scope='col'><b>Telefone :</b></td>";
			  	  echo "<td><b>$row[telefone]</b></td>";
			  	  echo "<td><form method='post' action='alter-tel-usuario.php'><input type='text' name='alterTel' required/><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Disponibilidade:<b></td>";
			  	  echo "<td><b>$row[disponibilidade]</b></td>";
			  	  echo "<td><form method='post' action='alter-disp-usuario.php'><select class='custom-select' id='inputGroupSelect02' name='alterDisp' required>
                    <option value=''>Selecione</option>
                    <option value='Manha'>Manha</option>
                    <option value='Tarde'>Tarde</option>
                    <option value='Noite'>Noite</option>
                    <option value='Manha ou tarde'>Manha ou tarde</option>
                    <option value='Manha ou noite'>Manha ou noite</option>
                    <option value='Tarde ou noite'>Tarde ou noite</option>
                    <option value='Qualquer horario'>Qualquer horario</option>
                </select><input type='submit' value='alterar' class='submit-alter-select'/></form></td>";
                echo"</tr>";
                
                echo"<tr>";
				echo "<td scope='col'><b>Experiencia profissional :</b></td>";
				echo "<td><form method='post' action='alter-infoProf-usuario.php'><div><textarea cols='30' rows='10' name='alterInfoProf' style='height:1%; resize:none;' required/>$row[infoProfissional]</textarea></div><input type='submit' value='alterar' class='submit-alter-file'/></form></td>";
				echo"</tr>";

				echo"<tr>";
				echo "<td scope='col'><b>Cursos extracurriculares :</b></td>";
				echo "<td><form method='post' action='alter-cursos-usuario.php'><div><textarea cols='30' rows='10' name='alterCursos' style='height:1%; resize:none; margin-top:5%;' required/>$row[cursos]</textarea></div><input type='submit' value='alterar' class='submit-alter-file'/></form></td>";
				echo"</tr>";;
		}
			echo "</table>";

		?>
		
	</section>
    </body>
</html>