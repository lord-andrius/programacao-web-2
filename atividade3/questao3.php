
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Questão 3</title>
	</head>
	<body>
		<?php
			$contador = 1;
			$chico = 150;
			$ze = 110;
			while($chico > $ze) {
				$contador++;
				$chico += 2;
				$ze += 3;
			}
			echo $contador;

		?>
	</body>
</html>

