<?php
/*
Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.

Nicolas Luciano Rojas
*/

$operadorArray = array("+","-","/","*");
$op1 = 10;
$op2 = 2;
$resultado = null;
$operador = $operadorArray[rand(0,3)];

switch ($operador)
{
    case "+":
        $resultado = $op1 + $op2;
    break;

    case "-":
        $resultado = $op1 - $op2;
    break;

    case "/":
        $resultado = $op1 / $op2;
    break;

    case "*":
        $resultado = $op1 * $op2;
    break;

    default:
        echo "No es posible realizar la operacion indicada.";
}
echo $op1." ".$operador." ".$op2." = ".$resultado;
?>
