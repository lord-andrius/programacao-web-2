<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Questão 4</title>
	</head>
	<body>
		<form method="get">
			<label for="id"ID:>ID:</label>
			<input name="id" id="id">
			<label for="nota1" required>Primeira nota:</label>
			<input type="number" id="nota1" name="nota1" required>
			<label for="nota2">Segunda nota:</label>
			<input type="number" id="nota2" name="nota2" required>

			<label for="nota3">Terceita nota:</label>
			<input type="number" id="nota3" name="nota3" required>
			<label for="me">ME:</label>
			<input type="number" id="me" name="me" required>



			<input type="submit" value="Clique aqui para ver o conceito">
		</form>
		<?php
				$nota1 = floatval($_GET["nota1"]);
				$nota2 = floatval($_GET["nota2"]);
				$nota3 = floatval($_GET["nota3"]);
				$me = floatval($_GET["me"]);
				$resultado = ($nota1 + ($nota2 * 2) + ($nota3 * 3) + $me) / 7.0;
				$conceito = '';
				if($resultado >= 9) {
					$conceito = 'A';
				} else if($resultado >= 7.5) {
					$conceito = 'B';
				} else if($resultado >= 6) {
					$conceito = 'C';
				} else if($resultado >= 4) {
					$conceito = 'D';
				} else {
					$conceito = 'E';
				}
				printf("<span>Conceito: %s</span>", $conceito);

		?>
	</body>
</html>

