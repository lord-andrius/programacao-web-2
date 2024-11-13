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
				for($i = 1; $i <= $final; $i++){
					$linha = "";
					for($i2 = 1; $i2 <= $i; $i2++) {
						$linha = $linha . sprintf('%d', $i2);
					}
					printf("<span>%s</span><br>", $linha);
				}
				for($i = $final - 1; $i >= 1; $i--){
					$linha = "";
					for($i2 = $i; $i2 >= 1; $i2--) {
						$linha = sprintf('%d', $i2) . $linha;
					}
					printf("<span>%s</span><br>", $linha);
				}
			}

		?>
	</body>
</html>

