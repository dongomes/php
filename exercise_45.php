<?php
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manejo de fomularios en php</title>
</head>
<body>
  <?php
  /*
  las variables supr globales opara capturar data en php son $_GET y $_POST 
  */
  ?>

  <form action="bienvenida.php" method="post">
    Nombre:<input type="text" name="nombre"><br>
    E-mail:<input type="text" name="email"><br>
  </form>
</body>
</html>