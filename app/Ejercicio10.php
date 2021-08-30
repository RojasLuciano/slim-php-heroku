<?php
/*
Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.

Nicolas Luciano Rojas
*/
$lapicera = array(
    ['color' => 'Azul','marca' => 'Nike','trazo' => 'fino','precio' => 10],
    ['color' => 'Rojo','marca' => 'Adidas','trazo' => 'grueso','precio' => 15],
    ['color' => 'Verde','marca' => 'Vans','trazo' => 'ultra-fino','precio' => 20]
);

foreach($lapicera as $valor)
{
    printf("<br>");
    foreach($valor as $key => $value)
    {
        printf($key.": " .$value.": .<br>");
    }
}

?>
