<?php

	
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h5>EDIÇÃO DE REGISTROS</h5><hr>

	<?php

		include_once 'banco_de_dados/conexao.php';

		$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
		$_SESSION['id'] = $id;
		$querySelect = $link->query("SELECT * FROM usuarios WHERE id='$id'");

		while ($registros = $querySelect->fetch_assoc() ):

			
			$nome = $registros['nome'];
			$email = $registros['email'];
			$cep = $registros['cep'];
			$rua = $registros['rua'];
			$cpf = $registros['cpf'];
			$rg = $registros['rg'];
			$cnh = $registros['cnh'];



		endwhile; 

	?>

		<form action="banco_de_dados/update.php" method="post">
		
		<h1>Alteração</h1>

		Nome:	
		<input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40">

		<br>

		Email:
		<input type="email" name="email" id="email" value="<?php echo $email ?>">

		<br>

		CEP:
		<input type="text" name="cep" id="cep" value="<?php echo $cep ?>" maxlength="15">
			
		<br>

		RUA:
		<input type="text" name="rua" id="rua" value="<?php echo $rua ?>">

		<br>

		CPF:
		<input type="text" name=" cpf" id="cpf" value="<?php echo $cpf ?>" maxlength="11">

		<br>

		RG:
		<input type="text" name="rg" id="rg" value="<?php echo $rg ?>">

		<br>

		CNH:
		<input type="text" name="cnh" id="cnh" value="<?php echo $cnh ?>">

		<br>


		<input type="submit" value="Alterar">
		<a href="consultas.php">Cancelar</a>


	</form>

</body>
</html>