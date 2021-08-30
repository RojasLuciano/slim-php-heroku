<?php
/*
Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

Nicolas Luciano Rojas
*/

$num = rand(20, 60);
$decenaEnPalabra = null;
$unidadEnPalabra = null;

$decena = strval($num) [0];
$unidad = strval($num) [1];
/*
echo $num . "<br>";

var_dump($decena);
var_dump($unidad);
*/
switch ($decena)
{
    case "2":
        $decenaEnPalabra = "Veinte";
        if($unidad != 0)
        {
            $decenaEnPalabra = "Veinti";
        }
    break;

    case "3":
        $decenaEnPalabra = "Treinta";
        if($unidad != 0)
        {
            $decenaEnPalabra = "Treinta y ";
        }
    break;

    case "4":
        $decenaEnPalabra = "Cuarenta";
        if($unidad != 0)
        {
            $decenaEnPalabra = "Cuarenta y ";
        }
    break;

    case "5":
        $decenaEnPalabra = "Cincuenta";
        if($unidad != 0)
        {
            $decenaEnPalabra = "Cincuenta y ";
        }
    break;

    case "6":
        $decenaEnPalabra = "Sesenta";
        if($unidad != 0)
        {
            $decenaEnPalabra = "Sesenta y ";
        }
    break;

    default:
        $decenaEnPalabra = "Algo salio mal en la decena";
    break;
}

switch ($unidad)
{
    case "1":
        $unidadEnPalabra = "uno";
    break;

    case "2":
        $unidadEnPalabra = "dos";
    break;

    case "3":
        $unidadEnPalabra = "tres";
    break;

    case "4":
        $unidadEnPalabra = "cuatro";
    break;
    
    case "5":
        $unidadEnPalabra = "cinco";
    break;

    case "6":
        $unidadEnPalabra = "seis";
    break;

    case "7":
        $unidadEnPalabra = "siete";
    break;

    case "8":
        $unidadEnPalabra = "ocho";
    break;

    case "9":
        $unidadEnPalabra = "nueve";
    break;
}

echo $decenaEnPalabra.$unidadEnPalabra

?>
