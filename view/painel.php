<?php

session_start();
include('../controller/conexao.php');
include('../controller/verificacao-login.php');
include('header.php');

?>
	<div class="introducao-painelUsuario">
		<h2>Ola, <?php $dadosUsuario = "SELECT * FROM usuario WHERE email = '{$_SESSION['usuario']}'";
		$resultado = mysqli_query($conn, $dadosUsuario);
		while ($row = mysqli_fetch_assoc($resultado)) { echo $row['nome'];} ?></h2>
		<a href="../controller/logout.php" style="font-size: 20px; text-decoration: none;">sair</a>
	</div>

		<style type="text/css">
			
			td{
				font-size: 13px;
				font-family: arial;
				
			}
			tr{
				border-bottom:1px gray;
			}

			.custom-select{
				width:150px;
				margin-right: 10px;
				margin-top: 10px;
				margin-bottom: 10px;
			}

			.alter-data-cuidador{
				width: 150px;
				margin-left: 50px;
				margin-top: 30px;
			}

			.submit-alter-data{
				margin-left: 25%;
			}

			.alter-file-cuidador{
				margin-top: 30px;
			}

			.submit-alter-file{
				margin-top: 10px;
			}

			.submit-alter-select{
				margin-top: 30px;
			}
		</style>
		
		<section class="conteudoPainelUsuario">
		<table class="table-dados">
			  
		<?php

		$dadosUsuario = "SELECT * FROM usuario WHERE email = '{$_SESSION['usuario']}'";
		$resultado = mysqli_query($conn, $dadosUsuario);
		while ($row = mysqli_fetch_assoc($resultado)) {
			$atividade= $row['status'];
			if($atividade== 1){
				echo "<h2 style='color:red;'>Sua conta esta INATIVA! Entre em contato conosco para mais informações!</h2>";
			}
			
			  echo "<tbody>";
			  	echo"<tr>";
			  	  echo "<td scope='col'><b>E-mail :</b></td>";
			  	  echo "<td><b>$row[email]</b></td>";
			  	  echo "<td><form method='post' action='../controller/alter-email-usuario.php'><div class='alter-data-cuidador'><input type='text' name='alterEmail' required/></div><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Senha :</b></td>";
			  	  echo "<td><b>$row[senha]</b></td>";
			  	  echo "<td><form method='post' action='../controller/alter-senha-usuario.php'><div class='alter-data-cuidador'><input type='password' name='alterSenha' required/></div><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Nome :</b></td>";
			  	  echo "<td><b>$row[nome]</b>";
			  	  echo "<td><form method='post' action='../controller/alter-nome-usuario.php'><div class='alter-data-cuidador'><input type='text' name='alterNome' required/></div><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Nascimento :</b></td>";
			  	  echo "<td><b>$row[idade]</b></td>";
			  	  echo "<td><form method='post' action='../controller/alter-date-usuario.php'><div class='alter-data-cuidador'><input type='date' name='alterDate' required/></div><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Sexo :</b></td>";
			  	  echo "<td><b>$row[sexo]</b></td>";
			  	  echo "<td><form method='post' action='../controller/alter-sexo-usuario.php'><select class='custom-select' id='inputGroupSelect01' name='alterSexo' required>
                    <option value=''>selecione</option>
                    <option value='Masculino'>Masculino</option>
                    <option value='Feminino'>Feminino</option>
                </select><input type='submit' value='alterar' class='submit-alter-select'/></form></td>";
					echo"</tr>";
					
					echo"<tr>";
			  	  echo "<td scope='col'><b>Estado :</b></td>";
			  	  echo "<td><b>$row[estado]</b></td>";
			  	  echo "<td><form method='post' action='../controller/alter-estado-usuario.php'><select class='custom-select' id='inputGroupSelect01' name='alterEstado' required>
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
			  	  echo "<td><form method='post' action='../controller/alter-cidade-usuario.php'><div class='alter-data-cuidador'><input type='text' name='alterCidade' required/></div><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";

				  echo"<tr>";
			  	  echo "<td scope='col'><b>CEP :</b></td>";
			  	  echo "<td><b>$row[cep]</b></td>";
			  	  echo "<td><form method='post' action='../controller/alter-cep-usuario.php'><div class='alter-data-cuidador'><input type='text' placeholder='exemplo: 12345-678' name='alterCep' required/></div><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Bairro :</b></td>";
			  	  echo "<td><b>$row[bairro]</b></td>";
			  	  echo "<td><form method='post' action='../controller/alter-bairro-usuario.php'><div class='alter-data-cuidador'><input type='text' name='alterBairro' required/></div><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";
			      
			      echo"<tr>";
			  	  echo "<td scope='col'><b>Telefone :</b></td>";
			  	  echo "<td><b>$row[telefone]</b></td>";
			  	  echo "<td><form method='post' action='../controller/alter-tel-usuario.php'><div class='alter-data-cuidador'><input type='text' name='alterTel' required/></div><input type='submit' value='alterar' class='submit-alter-data'/></form></td>";
			  	  echo"</tr>";

			      echo"<tr>";
			  	  echo "<td scope='col'><b>Disponibilidade:<b></td>";
			  	  echo "<td><b>$row[disponibilidade]</b></td>";
			  	  echo "<td><form method='post' action='../controller/alter-disp-usuario.php'><select class='custom-select' id='inputGroupSelect02' name='alterDisp' required>
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
		}
			echo "</table>";

		?>
		
	</section>

	<section class="conteudoPainelUsuario" style="margin-top: 3%;" >
		<table>
			<?php

			$dadosUsuario = "SELECT * FROM usuario WHERE email = '{$_SESSION['usuario']}'";
			$resultado = mysqli_query($conn, $dadosUsuario);
			while ($row = mysqli_fetch_assoc($resultado)) {
				echo"<tr>";
				echo "<td scope='col'><b>Experiencia profissional :</b></td>";
				echo "<td><form method='post' action='../controller/alter-infoProf-usuario.php'><div><textarea cols='30' rows='10' name='alterInfoProf' style='height:1%; resize:none;' required/>$row[infoProfissional]</textarea></div><input type='submit' value='alterar' class='submit-alter-file'/></form></td>";
				echo"</tr>";

				echo"<tr>";
				echo "<td scope='col'><b>Cursos extracurriculares :</b></td>";
				echo "<td><form method='post' action='../controller/alter-cursos-usuario.php'><div><textarea cols='30' rows='10' name='alterCursos' style='height:1%; resize:none; margin-top:5%;' required/>$row[cursos]</textarea></div><input type='submit' value='alterar' class='submit-alter-file'/></form></td>";
				echo"</tr>";
			}
			?>
		</table>
	</section>

		
<?php include('footer.php')?>