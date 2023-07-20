<!DOCTYPE html>
<html lang="pt-bt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 4</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Conversor de Moedas v2.0</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);
    $cotacao = $dados["value"][0]["cotacaoCompra"];
    $valor = $_REQUEST["valor"];
    $dolar  = $valor / $cotacao;

    echo "Seus R\$" . number_format($valor, 2, ",", ".") . " equivalem a U\$" . number_format($dolar, 2, ",", ".");
    echo "<br> Cotação obtida diretamente do site do ";
    
    ?>
    <a href="https://www.bcb.gov.br/">Banco Central do Brasil</a>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>

</html>