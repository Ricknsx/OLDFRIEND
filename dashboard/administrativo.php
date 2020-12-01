<?php
	session_start();
	include_once("seguranca.php");
	include_once("conexao/conexao.php");
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
		<link href="css/style.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>
		
		<!-- Graficos -->
		<!-- CONSULTAS -->
		<?php 
			$semana1= "select * from usuario WHERE data_registro
			BETWEEN DATE_ADD(CURRENT_DATE(), INTERVAL -7 DAY) AND CURRENT_DATE()";
			$semana2 = "select * from usuario WHERE data_registro
			BETWEEN DATE_ADD(CURRENT_DATE(), INTERVAL -14 DAY) AND CURRENT_DATE()";
			$semana3 ="select * from usuario WHERE data_registro
			BETWEEN DATE_ADD(CURRENT_DATE(), INTERVAL -21 DAY) AND CURRENT_DATE()";
			$semana4 ="select * from usuario WHERE data_registro
			BETWEEN DATE_ADD(CURRENT_DATE(), INTERVAL -28 DAY) AND CURRENT_DATE()";
			
			$consultaSemana1 = mysqli_query($conexao,$semana1);
			$consultaSemana2= mysqli_query($conexao,$semana2);
			$consultaSemana3= mysqli_query($conexao,$semana3);
			$consultaSemana4= mysqli_query($conexao,$semana4);
			
			$registrosSemana1 = mysqli_num_rows($consultaSemana1);
			$registrosSemana2 = mysqli_num_rows($consultaSemana2);
			$registrosSemana3 = mysqli_num_rows($consultaSemana3);
			$registrosSemana4 = mysqli_num_rows($consultaSemana4);
		
		?>
            
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Tempo", "Registros", { role: "style" } ],
            ['Há 1 Semana', <?php echo $registrosSemana1; ?>,"brown"],
		    ['Há 2 Semanas', <?php echo $registrosSemana2; ?>,"brown"],
		    ['Há 3 Semanas', <?php echo $registrosSemana3; ?>,"brown"],
		    ['Há 4 Semanas', <?php echo $registrosSemana4; ?>,"brown"],
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" },
                        2]);

        var options = {
            title: "Quantidade de registros semanais",
            width: 700,
            height: 300,
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }
    </script>

	</head>

<body role="document">

  <!-- NAV BAR -->
	<nav class="navbar ">
  <a class="navbar-brand" href="administrativo.php" ><img src="../img/logoTipado.png" style="width:250px;height:50px;"></a>

    <div class="navbar-nav">
		<div class="navbar-form navbar-right">					
			<a href="sair.php" class="btn-sair">Sair</a>
		</div>
    </div>
  </div>
</nav>
<!-- Dados -->
<?php 
	$total= "select * from usuario";
	$semanal = "select * from usuario WHERE data_registro
	BETWEEN DATE_ADD(CURRENT_DATE(), INTERVAL -7 DAY) AND CURRENT_DATE()";
	$mensal ="select * from usuario WHERE data_registro
	BETWEEN DATE_ADD(CURRENT_DATE(), INTERVAL -30 DAY) AND CURRENT_DATE()";
	
	$consultaTotal = mysqli_query($conexao,$total);
	$consultaSemanal= mysqli_query($conexao,$semanal);
	$consultaMensal= mysqli_query($conexao,$mensal);
	
	$registrosTotal = mysqli_num_rows($consultaTotal);
	$registrosSemanal = mysqli_num_rows($consultaSemanal);
	$registrosMensal = mysqli_num_rows($consultaMensal);
	
?>
<div class="cont-dados-grafico">
	<div class="cont-dados">
		<h1>Cadastros</h1>
		<h3>Totais: <?php echo $registrosTotal; ?></h3>
		<h3>Ultima Semana: <?php echo $registrosSemanal; ?></h3>
		<h3>Ultimo Mês: <?php echo $registrosMensal; ?></h3>
	</div>
	<!-- Grafico -->

	<div class="-cont-grafico">
	<div id="columnchart_values" style="width: 70%; height: 100px;"></div>
	</div>
</div>


<!-- CADASTROS -->
<?php 
	$categoria = isset($_GET['txCategoria'])?$_GET['txCategoria']:"";
	$consulta = isset($_GET['txConsulta'])?$_GET['txConsulta']:"";

	
	$sql= "select * from usuario";

	if($categoria == "ID" ){
		$sql= "select * from usuario where idusuario like '$consulta'";
	}

	if($categoria == "Nome" ){
		$sql= "select * from usuario where nome like '%$consulta%'";
	}
	if($categoria == "Email" ){
		$sql= "select * from usuario where email like '$consulta'";
	}
	$consulta = mysqli_query($conexao,$sql); ?>	
	<div class="cont-tabela">	
		<h1>Usuários</h1>

		<form action="" method="get">
			<label> Consultar por:</label>
			<select name="txCategoria">
				<option>ID</option>
				<option>Nome</option>
				<option>Email</option>
			</select>
			<input type="text" placeholder="Consultar" name="txConsulta"></input>
			<input type="submit" value="Consultar">
		</form>
		<!-- TABELA -->
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th class="campo-tab">Nome</th>
							<th class="campo-tab">E-mail</th>
							<th>Data de Cadastro</th>
							<th>Status</th>
							
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>						
                	<tbody>
                   <?php
							
							while($row= mysqli_fetch_array($consulta)){	
								echo"<tr>
									<th scope='row'> $row[0]</th>
									<td class='campo-tab'>$row[3]</td>
									<td class='campo-tab'>$row[1]</td>
									<td>$row[15]</td>";
									if($row[16]== 1){
										$atividade= "<div class='inativo'>INATIVO</div>";
									}
									else{
										$atividade= "<div class='ativo'>ATIVO</div>";
									}
									echo "<td>$atividade</td>
									
									<td> <a type='button' class='btn btn-xs btn-warning' href='alterar/alterar.php?id=$row[0]'>Ver/Editar</a></td>
									";
									if($row[16] == 1){
									  echo "<td> <a type='button' class='btn btn-xs btn-danger' href='ativarRegistro.php?id=$row[0]'>Ativar</a></td>";
									}
									else{
										echo "<td> <a type='button' class='btn btn-xs btn-danger' href='desativarRegistro.php?id=$row[0]'>Desativar</a></td>";
									}
									
								echo "</tr>"; 

							}
                            echo"</tbody></table>";

							
						?>
			</div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <scr src="js/jquery.min.js"></scr>
    <script>window.jQuery || document.write('<scr src="../../assets/js/vendor/jquery.min.js"><\/script>')</scr>
    <script src="js/bootstrap.min.js"></scr>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

