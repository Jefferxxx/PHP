<?php

-/**
 * 
 * estructura
 * if(?){
 * if(?){
 * codigo a ejecutar
 * }else{
 *        codigo a ejecutar
 * }
 * }
 */

 $A= 20;
 $B= 3;
 $C=30;
  if ($A > $B){
    
   if ($A > $C){
    echo "la letra $A es mayor que $B y $C"
   }

   else{
    echo "la letra $A es mayor que $B pero es menor que $C"

   }

  }

  else if($B > $A){
    if ($B > $C){
      echo "la letra $B es mayor que $A y $C"
    }
    else {
       echo "la letra $C es mayor que $B y $A"
    }

  }

  echo "<hr><br>";


//dias de la semana  