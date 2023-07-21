<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usando $Server</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
    $valor1 = $_GET['valor1'] ?? 0;
    $valor2 = $_GET['valor2'] ?? 0;
    $soma = $valor1 + $valor2;
  ?>
  <main>
    <h1>SOMA DE VALORES</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="idvalor1">Digite o valor 1</label>
      <input type="number" name="valor1" id="idvalor1" value="<?=$valor1?>">
      <label for="idvalor2">Digite o valor 2</label>
      <input type="number" name="valor2" id="idvalor2" value="<?=$valor2?>">
      <input type="submit" value="Somar">
    </form>
  </main>
  <section>

    <h1>RESULTADO</h1>
    <?="A soma entre $valor1 e $valor2 é igual a <strong>$soma";

?>
  </section>
</body>

</html>