<?php

function crearGrupos($arreglo, $n) {
// Validar que haya suficientes registros en el arreglo original
if (count($arreglo) < $n) {
return false;
}

// Inicializa un arreglo vacío para almacenar los subarreglos
$subarreglos = array();

// Mezclar aleatoriamente el arreglo original
shuffle($arreglo);

// Dividir el arreglo en n subarreglos
$numRegistros = count($arreglo);
$registrosPorSubarreglo = ceil($numRegistros / $n);

$cinturonesDisponibles = array("rojo", "negro");
$dojosUsados = array();

for ($i = 0; $i < $numRegistros; $i += $registrosPorSubarreglo) {
$subarreglo = array_slice($arreglo, $i, $registrosPorSubarreglo);

// Asignar un cinturón aleatorio a todos los registros en el subarreglo
$cinturónAleatorio = $cinturonesDisponibles[array_rand($cinturonesDisponibles)];
foreach ($subarreglo as &$registro) {
$registro["cinturón"] = $cinturónAleatorio;
}

// Asegurarse de que los registros en el subarreglo tengan diferentes Dojos
$dojosSubarreglo = array_column($subarreglo, "dojo");
if (count(array_unique($dojosSubarreglo)) < count($dojosSubarreglo)) {
// Si hay registros con el mismo Dojo, volvemos a mezclar
shuffle($subarreglo);
}

// Agregar el campo "puntaje" con un valor 0.
foreach ($subarreglo as &$registro) {
$registro["puntaje"] = 0;
}

$subarreglos[] = $subarreglo;
}

return $subarreglos;
}

// Ejemplo de uso:
$tabla = array(
array("id" => 1, "ci" => "12345", "dojo" => "Aikido", "nombre" => "Juan"),
array("id" => 2, "ci" => "67890", "dojo" => "Karate", "nombre" => "María"),
array("id" => 3, "ci" => "54321", "dojo" => "Judo", "nombre" => "Carlos"),
array("id" => 4, "ci" => "98765", "dojo" => "Taekwondo", "nombre" => "Ana"),
array("id" => 5, "ci" => "24680", "dojo" => "Kung Fu", "nombre" => "Luis"),
array("id" => 6, "ci" => "13579", "dojo" => "Boxeo", "nombre" => "Laura")
);

$n = 2; // Cantidad de elementos en cada subarreglo

$subarreglos = crearGrupos($tabla, $n);

// Imprimir los subarreglos resultantes
foreach ($subarreglos as $index => $subarreglo) {
echo "Subarreglo $index:\n";
print_r($subarreglo);
}