<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Questão 5</title>
	</head>
	<body>
		<form method="get">
			<label for="cargo">Cargo:</label>
			<select required name="cargo" for="cargo">
				<option value="Gerente">Gerente</option>
				<option value="Engenheiro">Engenheiro</option>
				<option value="Técnico">Técnico</option>
				<option value="Outro" selected>Outro</option>
			</select>
			<label for="salario">Salário:</label>
			<input type="number" name="salario" id="salario" required>
			

			<input type="submit" value="Clique aqui para calcular o novo salario">
		</form>
		<?php
			if($_GET) {
				
				$porcentagem_cargos = [
					'Gerente' => 1.0 + 10.0/100.0,
					'Engenheiro' => 1.0 + 20.0/100.0,
					'Técnico' => 1.0 + 30.0/100,
					'Outro' => 1.0 + 40.0/100,
				];
				$salario = $_GET["salario"] * $porcentagem_cargos[$_GET["cargo"]];
				printf("<span>Novo salário: R$%.2f</span>", $salario);
			}

		?>
	</body>
</html>

