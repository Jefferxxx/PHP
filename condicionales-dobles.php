<?php

/**
 * Estructura condicional soble (if - else)
 * 
 * if(expresion){
 * codigo a ejecutar si la expresion es verdadera
 * }else{
 * codigo es es falsa
 * }
 * 
 * if(expresion):
 * si es vedadera
 * else:
 * si es falsa
 * endfi;
 */

 if(1 > 7 ){
  echo "condicion evalua a verdadero";
 }
else{
  echo "condicion evalua a false";
}

if (9 == 12):
  echo "condicion evalua a verdadero";
else:
  echo "condicion evalua falsa";
endif;

//calcular el total que una persona debe pagar en un montallantas, el precio de cada llanta es de 800 si se compran menos de 5 llantas y de 700 si se compran 5 o mas llantas 

$llantas =1;

if ($llantas <= 5){
  $pagar = $llantas * 800;
}
else{
  $pagar = $llantas * 700;
}
echo "<br>";

//determinar si un alumno a prueba o reprueba un curso, sabiendo que aprobara si su promedio de 3 calificaciones de 3 es igual o mayor a 3.0 caso contrario reprueba

$promedio=4.0;

if($promedio>=3.0){
  echo "aprobado"
}

else{
  echo "reprobado"
}


echo "<hr><br>";

// (8 >= 10 ) ? echo "verdadero" : echo "es falso";


/**
 * operador ternario
 * operador ? true : false;
 * 
 */

 //dos numeros, si es el primero es mayor que el segundo multiplicamos caso contraio lo dividimos

 $primero = 1;
 $segundo = 2;
 $tercero = 0;
 echo "<br>"
 $resultado = ($primero > $segundo ) ? $primero*$segundo : $primero/$segundo;