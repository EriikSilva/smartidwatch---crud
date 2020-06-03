<?php
	
	session_start();

	include_once 'conexao.php';

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
	$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
	$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
	$cnh = filter_input(INPUT_POST, 'cnh', FILTER_SANITIZE_SPECIAL_CHARS);

	$querySelect = $link->query("SELECT email FROM usuarios"); 

	$array_emails = [];

	while($emails = $querySelect->fetch_assoc()):

		$emails_existentes = $emails['email'];
		array_push($array_emails, $emails_existentes);
	endwhile;

	if(in_array($email, $array_emails)):

		$_SESSION['msg'] = "<p class='center'>".'USUARIO CADASTRADO COM ESSE EMAIL'."</p>";

		header('Location:../');
	else:
		$queryInsert = $link->query("INSERT INTO usuarios VALUES (default,'$nome','$email', '$cep', '$rua', '$cpf', '$rg', '$cnh')");
		$affected_rows = mysqli_affected_rows($link);

		if($affected_rows > 0):
			$_SESSION['msg'] = "<p class='center'>".'Cadastro efetuado com sucesso'."<br>";
			header('Location:../');
 		endif;
	endif;



?>