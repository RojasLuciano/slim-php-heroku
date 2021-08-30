
/*
<?php

/*
Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.

Nicolas Luciano Rojas
*/

$suma = 0;
$cantidad = 0;

    for($i = 1 ; $suma<1000 ; $i++)
    {
        if($suma + $i > 1000)
        {
            break;
        }
        $suma = $suma+$i;
        $cantidad += 1;
    }

    printf("<br>la suma es ".$suma);
    printf("<br>la cantidad es ".$cantidad);

?>

*/