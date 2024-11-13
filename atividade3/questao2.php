<?php
	function fatorial(int $n) {
		$resultado = 1;
		for($i = 2; $i < $n + 1; $i++)
			$resultado *= $i;
		return floatval($resultado);
	}
?>

<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Questão 1</title>
	</head>
	<body>
		<form method="get">
			<label for="final">Número:</label>
			<input type="number" id="final" name="final">
			

			<input type="submit" value="Clique Aqui para calcular sua idade">
		</form>
		<?php
			if($_GET) {
				$final = intval($_GET["final"]);
				$resultado = 0.0;
				for($i = 1; $i <= $final; $i++){
					$resultado += 1.0 + (1.0 / fatorial($i));
				}
				printf("<span>%.2f</span><br>", $resultado);
			}

		?>
	</body>
</html>

