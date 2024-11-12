<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Questão 4</title>
	</head>
	<body>
		<form method="get">
			<label for="idade">Idade:</label>
			<input type="number" id="idade" name="idade">
			

			<input type="submit" value="Clique Aqui para saber sua categoria">
		</form>
		<?php
			if($_GET) {
				$idade = intval($_GET["idade"]);
				$categoria = '';
				$msg_erro = '';
				if($idade > 18) {
					$categoria = 'adulto';
				} else if($idade > 13) {
					$categoria = 'juvenil B';
				} else if($idade > 10) {
					$categoria = 'juvenil A';
				} else if($idade > 7) {
					$categoria = 'infantil B';
				} else if($idade > 4) {
					$categoria = 'infatil A';
				} else {
					$msg_erro = 'Não aceitamos crianças com menos de 5 anos';	
				}

				if($msg_erro)
					printf("<span>%s</span>", $msg_erro);
				else
					printf("<span>Categoria: %s</span>", $categoria);
			}

		?>
	</body>
</html>

