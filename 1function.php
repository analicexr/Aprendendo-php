<?php

function Dobro($n) {
    return $n * 2;

}

$n = (int) readline("Digite seu número: ");
$resultado = Dobro($n);
echo "O seu número em dobro: " . "$resultado";

?>