<?php
function fatorial(int $n) {
    $resultado = 1;
    for($i = 2; $i < $n + 1; $i++)
        $resultado *= $i;
    return floatval($resultado);
}
?>
