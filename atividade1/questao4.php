<?php
	$altura = floatval($_GET["altura"]);
	$sexo = strtolower($_GET["sexo"]);
	$pesoIdeal = 0;
	if($sexo == 'm') {
		$pesoIdeal = (72.7 * $altura) - 58.0;
	} else {
		$pesoIdeal = (62.1 * $altura) - 44.7;			
	}	
	printf("Peso ideal: %.2f\n", $pesoIdeal);

?>
