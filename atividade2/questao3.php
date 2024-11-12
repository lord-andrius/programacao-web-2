<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Questão 3</title>
	</head>
	<body>
		<form method="get">
			<label for="x_p1">X do primeiro ponto:</label>
			<input type="number" id="x_p1" name="x_p1">
			<label for="y_p1">Y do primeiro ponto:</label>
			<input type="number" id="y_p1" name="y_p1">

			<label for="x_p2">X do segundo ponto:</label>
			<input type="number" id="x_p2" name="x_p2">
			<label for="y_p2">Y do segundo ponto:</label>
			<input type="number" id="y_p2" name="y_p2">



			<input type="submit" value="Clique Aqui para calcular sua idade">
		</form>
		<?php
			if($_GET) {
				$x_p1 = floatval($_GET["x_p1"]);
				$y_p1 = floatval($_GET["y_p1"]);
				$x_p2 = floatval($_GET["x_p2"]);
				$y_p2 = floatval($_GET["y_p2"]);
				$resultado = ((($x_p1 - $x_p2) ** 2) + (($y_p1 - $y_p2) ** 2)) ** (1/2);
				printf("<span>Distancia: %f</span>", $resultado);
			}

		?>
	</body>
</html>

