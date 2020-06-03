<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
	<form action="banco_de_dados/create.php" method="post">
		
		<h1>MODERADOR</h1>

		<?php

			if(isset($_SESSION['msg'])):

				echo $_SESSION['msg'];

				session_unset();
			endif;
		?>
<!--
		Nome:	
		<input type="text" name="nome" id="nome" maxlength="40">

		<br>

		Email:
		<input type="email" name="email" id="email">

		<br>

		CEP:
		<input type="text" name="cep" id="cep" maxlength="15">
			
		<br>

		Rua:
		<input type="text" name="rua" id="rua">
		
		<br>

	CPF:
		<input type="text" name="cpf" id="cpf" maxlength="11">
		<br>
		RG:
		<input type="text" name="rg" id="rg">
		<br>
		CNH:
		<input type="text" name="cnh" id="cnh">

		<br>


		<input type="submit" value="Cadastrar">
		<input type="reset" value="Limpar">


	</form>
-->	
	<br><br>

	<a href="consultas.php">PESQUISAR POR TODOS OS USUARIOS</a>
</center>
</body>
</html>