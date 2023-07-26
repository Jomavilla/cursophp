<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $cep = $_GET['cep'] ?? 00000-00;
        $url = 'https://cdn.apicep.com/file/apicep/'. $cep .'.json';
        $localidade = json_decode(file_get_contents($url, true));
            $estado = $localidade->state;
            $cidade = $localidade->city;
            $bairro = $localidade->district;
            $rua = $localidade->address;
    
    ?>
    <main>
        <h1>Verificando seu endereco</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="id-cep">Digite o seu CEP:</label>
            <input type="text" onkeypress="$(this).mask('00.000-000')" name="cep" id="id-cep" value="<?=$cep?>">
            <label for="id-estado">Estado:</label>
            <input type="text" name="estado" id="id-estado" value="<?=$estado?>">
            <label for="id-cidade">Cidade:</label>
            <input type="text" name="cidade" id="id-cidade" value="<?=$cidade?>">
            <label for="id-bairro">Bairro:</label>
            <input type="text" name="bairro" id="id-bairro" value="<?=$bairro?>">
            <label for="id-rua">Estado:</label>
            <input type="text" name="rua" id="id-rua" value="<?=$rua?>">
            <input type="submit" value="Verificar">
        </form>
    </main>

    <section>
        <h1>Seu endereco</h1>
        <?php
            //echo "Estado: $estado";
            //echo "<br>Cidade: $cidade";
            //echo "<br>Bairro: $bairro";
            //echo "<br>Rua: $rua";
        ?>
    </section>
</body>
</html>