<?php
	$salario = 1200;
	$reajuste = $salario < 300 ? 1.5 : 1.3;
	printf("R$%.2f -> R$%.2f", $salario, $salario * $reajuste);
?>
