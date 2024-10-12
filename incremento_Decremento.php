<?php
/**
 * 
 * operadores de incremento y decremento
 * 
 * simbolo       Nombre
 * ++            incremento
 * --            Decremento
 * 
 * Ejemplo
 * 
 * ++$variable    Pre-incremento
 * --$variable    Pre-decremento
 */

 $numero = 10;

//primero incrementa y luego realiza la operacion
 echo "pre incremento".++$numero;

 echo "<br";

 // primero realiza la operacion y luego incrementa
 echo "post incremento" .$numero++;

 echo "<br>";
 
 echo $numero;

 //primero realiza la operacion y luego resta el valor
echo "pre deceremento".--$numero;

echo "<br>";

//
echo "post decremento".$numero--;

echo "<br>";


//10 + 1 = 11
$resultado = ++$numero;

echo $resultado; 

echo "<br>";

//
$resultado = $numero++;
echo "linea 51 ¿?" .$resultado;
