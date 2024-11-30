<?php
// Creamos lafunción para generar la serie Fibonacci
function generarFibonacci($n) {
    // Validamos que el número sea mayor a 0
    if ($n <= 0) {
        return [];
    }
    
    // Creamos un arreglo para almacenar la serie
    $fibonacci = [0]; // El primer término es 0

    if ($n > 1) {
        $fibonacci[] = 1; // Agregar el segundo término que es 1
    }

    // Generar la serie hasta el término n
    for ($i = 2; $i < $n; $i++) {
        // Cada término es la suma de los dos anteriores
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Probar la función
print_r(generarFibonacci(10));
?>
