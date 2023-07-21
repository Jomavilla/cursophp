<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 6</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 1;
    $resultado = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;
  ?>
  <main>
    <h1>Anatomia de uma Divisao</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="id-dividendo"> Dividendo</label>
      <input type="number" name="dividendo" id="id-dividendo" value="<?=$dividendo?>">
      <label for="id-divisor">Divisor</label>
      <input type="number" name="divisor" id="id-divisor" value="<?=$divisor?>">  
      <input type="submit" value="Analisar">
    </form>
  </main>
  <section>
    <h2>Estrutura da Divisao</h2>

    <?php
      echo "<br>Dividendo: $dividendo";
      echo "<br>Divisor: $divisor";
      echo "<br>Resultado: $resultado";
      echo "<br>Resto: $resto";
    ?>
  </section>
</body>
</html>