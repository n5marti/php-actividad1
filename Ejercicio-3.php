<?php
// Creamos una función que verifique si una cadena es un palíndromo
function esPalindromo($cadena) {
    // Eliminamos espacios y pasamos a minúsculas la cadena para evitar diferencias de formato
    $cadena = strtolower(str_replace(' ', '', $cadena));

    // El siguiente codigo compara la cadena con su reverso
    return $cadena === strrev($cadena);
}

// Probar la función
var_dump(esPalindromo("Yo hago yoga hoy")); // true
var_dump(esPalindromo("Yo estudio hoy")); // false
?>
