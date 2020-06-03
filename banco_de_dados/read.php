<?php

	include_once 'conexao.php';

	$querySelect = $link->query("SELECT * FROM usuarios");

	while($registros = $querySelect->fetch_assoc()):

		$id = $registros['id'];
		$nome = $registros['nome'];
		$email = $registros['email'];
		$cep = $registros['cep'];
		$rua = $registros['rua'];
		$cpf = $registros['cpf'];
		$rg = $registros['rg'];
		$cnh = $registros['cnh'];

		echo "<tr>";
		echo "<td>|$nome</td>
				<td>| $email</td>
				<td>| $cep</td>
				<td>| $rua</td>
				<td>| $cpf</td>
				<td>| $rg</td>
				<td>| $cnh |</td>
				<td><a href='editar.php?id=$id'>UPDATE</td>
				<td><a href='banco_de_dados/delete.php?id=$id'>DELETE</a></td>
				";

		echo "<tr>";

	endwhile;


?>