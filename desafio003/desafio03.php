<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertendo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php 
            $valor = $_GET["valor"];
            $cotacao = $_GET["valor"] / 5.22;
            echo "Seus R$ $valor equivalem a US$ " . round($cotacao,2);
            echo nl2br("\n\n\n\n\nCotação fixa de R$ 5,22 informada diretamente no código");
?>
        <br>
        <br>
        <br>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>