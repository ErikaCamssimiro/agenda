<?php

	$dbHost = 'Localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName1 = 'formulario-pacientes';
	$dbName2 = 'cadastros-psicologo';
	$dbName3 = 'login-psicologo';

	$conexao1 = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName1);

	$conexao2 = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName2);

	$conexao3 = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName3);
?>

