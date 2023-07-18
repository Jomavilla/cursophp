<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Resultados dos Processos</h1>
  </header>
  <main>
    <?php 
      date_default_timezone_set("America/Sao_Paulo");
      $nome = $_GET["nome"];
      $snome = $_GET["snome"];
      $aniv = $_GET["aniv"];
      echo "Olá, que bom conhecer você $nome $snome!!, hoje ainda é dia " . date("d/M/Y"). " mas dia $aniv teremos uma surpresinha para você  \u{2764}";
      
    ?>
  </main>
</body>

</html>