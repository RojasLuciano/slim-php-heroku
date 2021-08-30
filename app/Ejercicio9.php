<?php
/*
Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.

Nicolas Luciano Rojas
*/
$lapicera = array(
    'color' => 'Azul',
    'marca' => 'Nike',
    'trazo' => 'fino',
    'precio' => 10
);
foreach($lapicera as $key => $value)
{
    printf($key.": " .$value.": .<br>");
}


printf("<br>");
$lapicera ['color'] = 'Rojo';
$lapicera ['marca'] = 'Adidas';
$lapicera ['trazo'] = 'grueso';
$lapicera ['precio'] = '15';
foreach($lapicera as $key => $value)
{
    printf($key.": " .$value.": .<br>");
}

printf("<br>");
$lapicera ['color'] = 'Verde';
$lapicera ['marca'] = 'Vans';
$lapicera ['trazo'] = 'ultra-fino';
$lapicera ['precio'] = '20';
foreach($lapicera as $key => $value)
{
    printf($key.": " .$value.": .<br>");
}




?>
