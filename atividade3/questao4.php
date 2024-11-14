<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Questão 4</title>
</head>
<body>
<form method="get">
<label for="numero">Número:</label>
<input type="number" max=20 min=2 id="numero" name="numero">


<input type="submit" value="Clique Aqui para calcular sua idade">
</form>
<?php
$numero = 0;
if($_GET) {
    $qtd_x = 0;
    $contador = intval($_GET["numero"]);
    while($contador >= 1) {
        $linha = '';
        for($i = 0; $i < $qtd_x; $i++) {
            $linha = $linha . 'x';

        }
        for($i = 1; $i <= $contador; $i++) {
            $linha = $linha . $i;
        }
        printf("<span>%s</span><br>", $linha);
        $qtd_x++;
        $contador--;
    }
}

?>
</body>
</html>

