<?php
// Función para generar la serie de Fibonacci
function generarFibonacci($n) {
    // Comprobar si el número es menor o igual a 0, en cuyo caso no tiene sentido generar la serie
    if ($n <= 0) {
        return [];
    }
    
    // Crear un array para almacenar la serie de Fibonacci
    $serie = [0, 1]; // Comenzamos la serie con los dos primeros términos: 0 y 1
    
    // Generar los términos de la serie hasta que tengamos 'n' términos
    for ($i = 2; $i < $n; $i++) {
        // El próximo término es la suma de los dos términos anteriores
        $serie[] = $serie[$i - 1] + $serie[$i - 2];
    }
    
    // Retornar la serie completa
    return $serie;
}

// Ejemplo de uso: Generar los primeros 10 términos de la serie Fibonacci
$n = 10;
$resultado = generarFibonacci($n);

// Mostrar el resultado
echo "Los primeros $n términos de la serie Fibonacci son: " . implode(", ", $resultado);
?>
