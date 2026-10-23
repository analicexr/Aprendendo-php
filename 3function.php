<?php

function MaiorNumero($a, $b, $c) {

    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

$a = (int) readline("Digite seu primeiro número: ");
$b = (int) readline("Digite seu segundo número: ");
$c = (int) readline("Digite seu terceiro número: ");

$resultado = MaiorNumero($a, $b, $c);
echo "O maior número é: " . $resultado;

?>