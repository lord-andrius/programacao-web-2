<?php
    $resultado = 1;
    for($i = 93; $i < 1478; $i += 2) {
        $qtd_div = 0;
        for($i2 = 3; $i2 < intdiv($i, 2) + 1; $i2++) {
            //printf("<span>%d</span><br>", $i2);
            $qtd_div += $i % $i2 == 0 ? 1 : 0;
        }
        if($qtd_div == 0)
            $resultado *= floatval($i);
    }
    echo $resultado;
?>
