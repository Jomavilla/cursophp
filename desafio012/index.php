<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 12</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php 
    $seg = $_GET['seg'] ?? 0;
    $res_seg = (((($seg % 604800) % 86400) % 3600) % 60);
    $min = intdiv((($seg % 604800) % 86400) % 3600, 60);
    $hour = intdiv(($seg % 604800) % 86400, 3600);
    $days = intdiv($seg % 604800, 86400);
    $sem = intdiv($seg, 604800);
    
  ?>

  <main>
    <h1>Calculadora de Tempo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="id-seg">Qual é o total de segundos?</label>
      <input type="number" name="seg" id="id-seg" value="<?=$seg?>">
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h1>Totalizando tudo</h1>
    <?php 
      echo "Analisando o valor que você digitou, <b>$seg segundos</b> equivalem a um total de:";
      echo "<ul><li>$sem semanas</li><li>$days dias</li><li>$hour horas</li><li>$min minutos</li><li>$res_seg segundos</li></ul>";
      
      
    ?>
  </section>

</body>

</html>