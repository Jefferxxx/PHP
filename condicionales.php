<?php

/**
 * estructura condicional simple
 * 
 * if(expresion){
 * codigo a ejecutar
 * }
 * if (expresion):
 * codigo a ejecutar
 * endif;
 */

 $edad =18;
 $saludo= "hola";
 $par= 2;

 if($edad>=18){
  echo "hola persona";
 }

 echo "<br>"
 ?>

 <div>
  <?php if ($edad >=18): ?>
    <h1>
      <?=$saludo?>
    </h1>
    <?php endif; ?>
  </div>

  <?php

// 1. realize un programa donde se alia un nuevo, si el numero es par indique que el numero es par
echo "<br>"
$par=2
  echo "<br>"
if($par= %2 == 0){
  echo "el numero es par";
}

echo "<br>";

//2. en un almacen  se le hace un 20% de descuentoa los clientes cuya compra supere los 100 dolares cual sera la cantidad que pagara la persona por su compra
$compra=100;

if ($compra=  > 100)
{
  echo $compra = $compra - ($compra * 0.20);
}
  echo "<br>";

?>



