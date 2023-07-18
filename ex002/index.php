<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <h1>Teste PHP</h1>
  <?php
  date_default_timezone_set("America/Sao_Paulo");
  echo "Hoje é dia " . date("d/M/Y");
  echo " e a hora atual é " . date("G:i:s");
  echo "\u{23F0}";
  ?>
</body>

</html>