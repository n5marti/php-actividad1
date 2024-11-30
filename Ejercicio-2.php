<?php
// Creamos la función para verificar si un número es primo
function esPrimo($numero) {
    // Números menores o iguales a 1 no son primos
    if ($numero <= 1) {
        return false;
    }

    // Revisar divisores desde 2 hasta la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false; // Si es divisible, no es primo
        }
    }

    return true; // Si no se encontró divisor, es primo
}

// Probar la función
var_dump(esPrimo(7)); // true
var_dump(esPrimo(10)); // false
?>
