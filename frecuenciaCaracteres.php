<?php
// Función para calcular la frecuencia de caracteres en una cadena
function frecuenciaCaracteres($cadena) {
    // Convertimos la cadena a minúsculas para que no distinga entre mayúsculas y minúsculas
    $cadena = strtolower($cadena);

    // Creamos un array vacío para almacenar la frecuencia de cada carácter
    $frecuencia = [];

    // Recorremos cada carácter en la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        // Si el carácter ya está en el array, incrementamos su contador
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            // Si el carácter no está en el array, lo agregamos con un contador inicial de 1
            $frecuencia[$caracter] = 1;
        }
    }

    // Retornamos el array de frecuencias
    return $frecuencia;
}

// Ejemplo de uso: calcular la frecuencia de caracteres en una cadena
$texto = "La vaca da lechugas";
$resultado = frecuenciaCaracteres($texto);

// Mostrar el resultado
echo "Frecuencia de caracteres en '$texto':\n";
foreach ($resultado as $caracter => $cantidad) {
    echo "'$caracter' => $cantidad\n";
}
?>