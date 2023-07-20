<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 2</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Trabalhando com números aleatórios</h1>
  </header>
  <main>
    <?php
            $numero = mt_rand(0, 100);
            echo 'Gerando um número aleatório entre 0 e 100...';
            echo nl2br("\nO valor gerado foi $numero");
?>
    <button onClick="window.location.reload();">&#128257;Gerar outro</button>

  </main>

</body>

</html>