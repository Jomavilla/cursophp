<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 7</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $valor = $_GET['valor'] ?? 1380;
    $s_minimo = 1380;
    $salario_minimo = intdiv($valor, $s_minimo);
    $s_restante = $valor  - $s_minimo * $salario_minimo; 
  ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="id-valor">Salário(R$):</label>
      <input type="number" name="valor" id="id-valor" step="0.01" value="<?=$valor?>">
      <p>Considerando o salário mínimo de <strong>R$ 1.380,00</strong></p>
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h2>Resultado Final</h2>
    <?php
      echo "Quem recebe um salário de R$" . number_format($valor, 2, ",", ".") . " ganha <strong> $salario_minimo salários mínimos</strong> + R$". number_format($s_restante, 2, ",", ".");
    ?>
  </section>
  
</body>
</html>