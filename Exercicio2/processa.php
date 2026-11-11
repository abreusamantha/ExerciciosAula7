
<?php

require_once "LocacaoBicicleta.php";

$nomeCliente = $_POST["nomeCliente"];
$tipoBicicleta = $_POST["tipoBicicleta"];
$horas = (int) $_POST["horas"];

// Verifica os dados
if (empty($nomeCliente) || $horas <= 0 ||
    ($tipoBicicleta != "Comum" && $tipoBicicleta != "Elétrica")) {

    exit("<p>Dados incorretos!</p>");
}

// Cria o objeto
$locacao = new LocacaoBicicleta(
    $nomeCliente,
    $tipoBicicleta,
    $horas
);

// Realiza os cálculos
$valorBruto = $locacao->calcularValorBruto();
$desconto = $locacao->calcularDesconto();
$total = $locacao->calcularTotal();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado da Locação</title>
</head>

<body>

    <h1>Resultado da Locação</h1>

    <p>
        <strong>Nome do cliente:</strong>
        <?= htmlspecialchars($locacao->getNomeCliente()) ?>
    </p>

    <p>
        <strong>Tipo da bicicleta:</strong>
        <?= htmlspecialchars($locacao->getTipoBicicleta()) ?>
    </p>

    <p>
        <strong>Horas de locação:</strong>
        <?= $locacao->getHoras() ?> horas
    </p>

    <hr>

    <p>
        <strong>Valor bruto:</strong>
        R$ <?= number_format($valorBruto, 2, ',', '.') ?>
    </p>

    <p>
        <strong>Desconto:</strong>
        R$ <?= number_format($desconto, 2, ',', '.') ?>
    </p>

    <h2>
        Valor final: R$ <?= number_format($total, 2, ',', '.') ?>
    </h2>

    <a href="index.php">Voltar</a>

</body>
</html>
