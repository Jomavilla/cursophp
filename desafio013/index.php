<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 13</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php 
    $din = $_GET['din'] ?? 0;
    $nota_100 = intdiv($din, 100);
    $nota_50 = intdiv($din % 100, 50);
    $nota_10 = intdiv(($din % 100) % 50, 10);
    $nota_5 = intdiv((($din % 100) % 50) % 10, 5);
  
  ?>
  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="id-din">Qual valor você deseja sacar? (R$)</label>
      <input type="number" name="din" id="id-din" value="<?=$din?>">
      <p>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
      <input type="submit" value="Sacar">
    </form>
  </main>

  <section>
    <?php              
      echo "<h1>Saque de R$". number_format($din, 2, ",", ".") . " realizado</h1>";
      echo "<br> O caixa eletrônico vai te entregar as seguintes notas:";
      echo "<ul><li> Notas de 100 : $nota_100</li><li>Notas de 50 : $nota_50</li><li>Notas de 10 : $nota_10</li><li>Notas de 5 : $nota_5</li></ul>";
    ?>
  </section>

</body>

</html>