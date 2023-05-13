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
    
    function escribirMensaje(){
      echo"Hola Mundo";
    }

    escribirMensaje();

    echo"<br>";
    echo"<br>";

    function nombreFamilia($primerNombre){
      echo "$primerNombre Perez. <br>";
    }

    nombreFamilia("Jose");
    nombreFamilia("Manuel");
    nombreFamilia("Carlos");
    nombreFamilia("Maria");

    echo"<br>";
    echo"<br>";

    function nombreFamilia2($primerNombre, $anio){
      echo "$primerNombre Perez. Nacio en el año $anio <br>";
    }

    nombreFamilia2("Jose","2000");
    nombreFamilia2("Manuel","1960");
    nombreFamilia2("Carlos","2020");
    nombreFamilia2("Maria","1998");

    echo"<br>";
    echo"<br>";
    
    function agregarNumero(int $a, int $b){
      return $a+$b;
      echo agregarNumero(5,"10 dias");

      
    }
  ?>
</body>
</html>