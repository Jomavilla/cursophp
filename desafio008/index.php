<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 8</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
    $num = $_GET['num'] ?? 0;
    $r_quadrada = sqrt($num);
    $r_cubica = $num ** (1/3); 

  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="id-num">Número:</label>
      <input type="number" name="num" id="id-num" value="<?=$num?>">
      <input type="submit" value="Calcular Raízes">
    </form>
  </main>

  <section>
    <h1>Resultado Final</h1>
    <?php
    echo "<p>Analisando o <strong>número $num</strong>, temos:</p>";
    echo "<br><ul><li> A sua raiz quadrada é <strong>" . number_format($r_quadrada, 3, ",", ".") . "</strong></li>";
    echo "<li> A sau raíz cúbica é <strong>" . number_format($r_cubica, 3, ",", ".") . "</strong></li></ul>";
    ?>
  </section>

</body>

</html>