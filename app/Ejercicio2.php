<?php
/*
Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.

Nicolas Luciano Rojas
*/

$mesActual = date('m');
$diaActual = date('d');
$estacion = null;

$date = null;
echo $date;
$date = date("d-m-Y H:i:s") . '<br>';
echo $date;
$date = date("Y-m-d H:i:s") . '<br>';
echo $date;

switch ($mesActual)
{
    case 1:
    case 2:
        $estacion = "Verano";
    break;

    case 3:
        if ($diaActual < 21)
        {
            $estacion = "Verano";
        }
        else
        {
            $estacion = "Otoño";
        }
    break;

    case "4":
    case "5":
        $estacion = "Verano";
    break;

    case "6":
        if ($diaActual < 21)
        {
            $estacion = "Otoño";
        }
        else
        {
            $estacion = "Invierno";
        }
    break;

    case "7":
    case "8":
        $estacion = "Invierno";
    break;

    case "9":
        if ($diaActual < 21)
        {
            $estacion = "Invierno";
        }
        else
        {
            $estacion = "Primavera";
        }
    break;

    case "10":
    case "11":
        $estacion = "Primavera";
    break;

    case "12":
        if ($diaActual < 21)
        {
            $estacion = "Primavera";
        }
        else
        {
            $estacion = "Verano";
        }
    break;
}

echo "Hoy es " . $date . " y la estacion es " . $estacion;

/*
Verano (21 de diciembre a 20 de marzo).
Otoño (21 de marzo a 20 de junio).
Invierno (21 de junio a 20 de septiembre).
Primavera (21 de septiembre a 20 de diciembre).
*/

?>
