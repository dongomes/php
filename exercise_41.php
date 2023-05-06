<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php orden de arreglos </title>
</head>
<body>
  <?php
  /*
  sort() - ordena los arreglos en orden ascedente
  rsort() - ordena los arreglos en orden descendente
  asort() - ordena los arreglos asociativos en orden ascedente segun el valor
  ksrot() - ordena los arreglos asociativos en orden ascedente, segun la clave
  arsort() - ordena los arreglos asociativos en orden descendente, segun el valor
  krsort() - ordena los arreglos adsociativos en orden descendente , segun la clave
  */

  $equipos = array ("Leones", "Magallanes", "Tiburones", "Cardenales");
  $numeros= array (1, 5 , 10 , 25, 30);
  $string= array ("Avion", "Casa", "Musica", "Playa");

  sort($equipos);

  $alength = count($equipos);

  for ($i = 0; $i < $alength; $i++){
    echo $equipos[$i];
    echo "<br>";
  }

  echo "<br>";
  echo "<br>";

  // sort() con numeros

  sort($numeros);
  $alength = count($numeros);

  for ($i = 0; $i < $alength; $i++){
    echo $numeros[$i];
    echo "<br>";
  }

  echo "<br>";
  echo "<br>";

  //rsort () con string

  rsort($string);
  $alength = count($string);

  for ($i = 0; $i < $alength; $i++){
    echo $string[$i];
    echo "<br>";
  }

  echo "<br>";
  echo "<br>";

  // rsort() con numeros
  rsort($numeros);
  $alength = count($string);

  for ($i = 0; $i < $alength; $i++){
    echo $numeros[$i];
    echo "<br>";
  }

  echo "<br>";
  echo "<br>";

  //asort () orden ascedente , segun valor

  $edades = array ("Eladio"=> "25", "Arcangel"=>"30", "Mora"=>"24", "Anuel"=>"26");
  asort($edades);

  foreach($edades as $x => $x_valor){
    echo "key=" . $x . ", Value=" . $x_valor;
    echo "<br>";
  }

  echo "<br>";
  echo "<br>";

  //ksrot() - ordena los arreglos asociativos en orden ascedente, segun la clave
  $edades = array ("Eladio"=> "25", "Arcangel"=>"30", "Mora"=>"24", "Anuel"=>"26");
  ksort($edades);

  foreach($edades as $x => $x_valor){
    echo "key=" . $x . ", Value=" . $x_valor;
    echo "<br>";
  }

  echo "<br>";
  echo "<br>";

  //arsort() - ordena los arreglos asociativos en orden descendente, segun el valor
  $edades = array ("Eladio"=> "25", "Arcangel"=>"30", "Mora"=>"24", "Anuel"=>"26");
  arsort($edades);

  foreach($edades as $x => $x_valor){
    echo "key=" . $x . ", Value=" . $x_valor;
    echo "<br>";
  }

  echo "<br>";
  echo "<br>";

  //krsort() - ordena los arreglos adsociativos en orden descendente , segun la clave
  $edades = array ("Eladio"=> "25", "Arcangel"=>"30", "Mora"=>"24", "Anuel"=>"26");
  krsort($edades);

  foreach($edades as $x => $x_valor){
    echo "key=" . $x . ", Value=" . $x_valor;
    echo "<br>";
  }


  ?>
</body>
</html>