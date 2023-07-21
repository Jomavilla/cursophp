<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 10</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
    date_default_timezone_set('America/Sao_Paulo');
    $ano_nasc = $_GET['ano-nasc'] ?? 0;
    $ano_request = $_GET['ano-request'] ?? 0;
    $idade_atual = date('Y') - $ano_nasc;
    $idade = $ano_request - $ano_nasc;  
  ?>
  <main>
    <h1>Calculando a sua idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="id-ano-nasc">Em que ano voce nasceu?</label>
      <input type="number" name="ano-nasc" id="id-ano-nasc" value="<?=$ano_nasc?>">
      <label for="id-ano-request">Quer saber sua idade em que ano? (atualmente estamos em 2023)</label>
      <input type="number" name="ano-request" id="id-ano-request" value="<?=$ano_request?>">
      <input type="submit" value="Qual será minha idade?">
    </form>
  </main>

  <section>
    <h1>Resultado</h1>
    <?php
      echo "Sua idade atualmente é de <strong>$idade_atual anos</strong>";
      echo "<br>Quem nasceu em $ano_nasc vai ter <strong>$idade anos</strong> em $ano_request";
    ?>
  </section>

</body>

</html>