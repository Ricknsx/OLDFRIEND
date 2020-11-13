<?php 
require("../controller/conexao.php");

$pegaCidades = $connFiltro->prepare("SELECT * FROM cidades WHERE estados_id='".$_POST['id']."'");
$pegaCidades->execute();

		$fetchAll = $pegaCidades->fetchAll();
		
		foreach($fetchAll as $cidades)
		{
			echo '<option>'.$cidades['nome'].'</option>';
			
		}