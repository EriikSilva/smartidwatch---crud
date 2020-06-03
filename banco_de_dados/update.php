<?php
	session_start();
	include_once 'conexao.php';

	$id = $_SESSION['id'];

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
	$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
	$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
	$cnh = filter_input(INPUT_POST, 'cnh', FILTER_SANITIZE_SPECIAL_CHARS);;


	$queryUpdate = $link->query("UPDATE usuarios SET nome='$nome', email='$email', cep='$cep', rua='$rua', cpf='$cpf', rg='$rg',cnh='$cnh' WHERE id='$id'");

	$affected_rows = mysqli_affected_rows($link);

	if($affected_rows > 0):

		
		header("Location:../consultas.php");

	endif;

?>