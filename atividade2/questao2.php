<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Questão 2</title>
	</head>
	<body>
		<form method="get">
			<label for="data_nascimento">Data de Nascimento:</label>
			<input type="date" id="data_nascimento" name="data_nascimento">
			<input type="submit" value="Clique Aqui para calcular sua idade">
		</form>
		<?php
			$data_get = $_GET["data_nascimento"];
			if($data_get) {
				$data_atual = date_create();
				$data_nascimento = date_create($data_get);
				$diferenca = date_diff($data_atual, $data_nascimento);
				printf("<span>Você tem %d anos, %d meses e %d dias!</span>", $diferenca->y, $diferenca->m, $diferenca->d);
			}

		?>
	</body>
</html>

