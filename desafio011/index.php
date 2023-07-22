<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 11</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php 
    $valor = $_GET['valor'] ?? 0;
    $porc = $_GET['porc'] ?? 0;
    $new_valor = $valor * ($porc/100) + $valor;
  ?>
  <main>
    <h1>Reajustador de Preços</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="id-valor">Preço do Produto (R$)</label>
      <input type="number" name="valor" id="id-valor" value="<?=$valor?>">
      <label for="id-porc">Qual será o percentual de reajuste?</label>
      <input type="number" name="porc" id="id-porc" value="<?=$porc?>">
      <input type="submit" value="Reajustar">
    </form>
  </main>

  <section>
    <h1>Resultado do Reajuste</h1>
    <?php
    echo "O produto custava R$". number_format($valor, 2, ",", ".") . ", com <b>$porc" . "% de aumento</b> vai passar a custar <b>R$" . number_format($new_valor, 2, ",", ".") . "</b> a partir de agora.";
    ?>
  </section>
</body>

</html>