<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
            $numero = $_GET["numero"];
            $antecessor = $_GET["numero"] - 1;
            $sucessor = $_GET["numero"] + 1;
            echo "O número escolhido foi $numero";
            echo nl2br("\nO seu antecessor é $antecessor");
            echo nl2br("\nO seu sucessor é $sucessor");
        ?>
        <br>
        <a href="javascript:history.go(-1)">← Voltar</a>
    </main>
    
</body>
</html>