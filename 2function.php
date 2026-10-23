<?php

function VerificarPar ($n) {

    if ($n % 2 == 0) {
        return "Par";
    } else {
        return "Impar";
    }
}
$n = (int) readline ("Verifique seu número: ");
$resultado = VerificarPar($n);

echo "Seu número é: " . $resultado;
?>