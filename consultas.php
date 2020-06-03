<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br><br>

	<center>
	 <table class="stripped">
	 		<thead>
	 			<tr>
	 				<th>| Nome | </th>
	 				<th>| Email </th>
	 				<th>| CEP </th>
	 				<th>| RUA </th>
	 				<th>| CPF </th>
	 				<th>| RG </th>
	 				<th>| CNH |</th>

	 			</tr>
	 		</thead>

	 		<tbody>
	 			<?php
	 				include_once 'banco_de_dados/read.php';
	 			?>
	 		</tbody>
	 </table>
	</center>

	<br>

	<center>
	<a href="index.php">VOLTAR</a>
	</center>
</body>
</html>