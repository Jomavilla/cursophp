<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1><strong>Analisador de Número Real</strong></h1>
        <?php
            $num = $_REQUEST["num"];
            $real = intdiv($num, 1);
            $fracionaria = $num - $real;

            echo "<p>Analisando o número $num informado pelo usuário:</p>";
            echo "<ul><li>A parte inteira do número é " . number_format($real, 0, ",", ".") . "</li>";
            echo "<li>A parte fracinária do número é " . number_format($fracionaria, 3, ",", ".") . "</li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>