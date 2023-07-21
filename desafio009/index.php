<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 9</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
    $nota1 = $_GET['valor1'] ?? 0;
    $nota2 = $_GET['valor2'] ?? 0;
    $peso1 = $_GET['peso1'] ?? 1;
    $peso2 = $_GET['peso2'] ?? 1;
    $media_simples = ($nota1 + $nota2) / 2;
    $media_ponderada = (($nota1 * $peso1) + ($nota2 * $peso2)) / ($peso1 + $peso2);
  ?>
  <main>
    <h1>Médias Aritméticas</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="id-valor1">Primeira Nota</label>
      <input type="number" name="valor1" id="id-valor1" value="<?=$nota1?>">
      <label for="id-peso1">Peso Nota 1</label>
      <input type="number" name="peso1" id="id-peso1" value="<?=$peso1?>">
      <label for="id-valor2">Segunda Nota</label>
      <input type="number" name="valor2" id="id-valor2" value="<?=$nota2?>">
      <label for="id-peso2">Peso Nota 2</label>
      <input type="number" name="peso2" id="id-peso2" value="<?=$peso2?>">
      <input type="submit" value="Calcular Médias">
    </form>
  </main>
  <section>
    <h1>Cálculo das Médias</h1>
    <?php
    echo "<p>Analisando os valores $nota1 e $nota2:</p>";
    echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($media_simples, 2, ",", ".") . "</li>";
    echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ". number_format($media_ponderada, 2, ",", ".") . "</li></ul>";
        ?>
  </section>

</body>

</html>