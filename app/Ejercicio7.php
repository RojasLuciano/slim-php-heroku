<?php
/*
Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.

Nicolas Luciano Rojas
*/

$index = 0;

for ($i = 0;$index < 10;$i++)
{
    if ($i % 2 != 0)
    {
        $array[$index] = $i;
        $index++;
    }
}

$mensaje = "Primero 10 numeros impares con metodo for: <br/>";
printf($mensaje);

for ($i = 0;$i < 10;$i++)
{
    printf("$array[$i] <br/>");
}

$mensaje = "Primeros 10 numeros impares con metodo foreach: <br/>";
printf($mensaje);
foreach ($array as $impares)
{
    printf("$impares <br/>");
}

$mensaje = "Primeros 10 numeros impares con metodo while: <br/>";
printf($mensaje);
$i = 0;
while($i < count($array))
{
    printf("$array[$i] <br/>");
    $i++;
}

?>
