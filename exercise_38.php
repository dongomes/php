<?php
declare(strict_type=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FUNCIONES EN PHP</title>
</head>
<body>
  <?php
    //las funciones pueden comenzar con letras y con piso (_), las funciones no tienen un case-sensitive
    
    
    /*function agregarNumero(int $a, int $b){
      return $a+$b;
      echo agregarNumero(5,"10 dias");
    }*/

    function colocarpeso(int $pesoMinimo=50){
      echo "El peso es $pesoMinimo <br>";
    }

    colocarpeso(78);
    colocarpeso();
    colocarpeso(90);
    colocarpeso(100);

    echo"<br>";
    echo"<br>";

    function suma(int $a, int $b){
      $c=$a+$b;
      return $c;
    }

    echo "2 + 2= " . suma(2, 2) . "<br>";
    echo "3 + 5= " . suma(3, 5) . "<br>";
    echo "8 + 12= " . suma(8, 12) . "<br>";

    echo"<br>";
    echo"<br>";

    function resta(float $a, float $b): float {
      return $a-$b;
    }

    echo "15.5 - 13.2= " . resta(15.5, 13.2) . "<br>";

    echo"<br>";
    echo"<br>";

    function multiplicacion(float $a, float $b): int {
      return(int) ($a* $b);
    }

    echo "12 * 12 = " . multiplicacion(12, 12) . "<br>";

    echo"<br>";
    echo"<br>";

    function sumaDiez(&$valor){
      $valor += 10;
    }

    $numero=15;

    sumaDiez($numero);
    echo $numero

  ?>
</body>
</html>