<?php	
	$servidor="localhost";
	$banco="bdoldfriend";
	$usuario="root";
	$senha="";
	
	$conn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha); 
?>