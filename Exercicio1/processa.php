<?php 
require_once 'Estacionamento.php'; 

$placa = $_POST['placa'] ?? ''; 
$tipoVeiculo = $_POST['tipoVeiculo'] ?? ''; 
$horas = $_POST['horas'] ?? ''; 

if (trim($placa) === '' || trim($tipoVeiculo) === '' || trim($horas) === '') { 
    exit('<p>Dados Incorretos. Preencha todos os campos.</p>'); 
} 

$estacionamento = new Estacionamento($placa, $tipoVeiculo, (int)$horas); 
?> 
<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Comprovante de Estacionamento</title> 
    <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
    <header class="cabecalho"> 
        <h1>Sistema de Estacionamento</h1> 
    </header> 
    <main> 
        <table border="1" cellpadding="10" cellspacing="0"> 
            <thead> 
                <tr> 
                    <th>Informações</th> 
                    <th>Valor</th> 
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <td>Placa do Veículo:</td> 
                    <td><?= htmlspecialchars($estacionamento->getPlaca()); ?></td> 
                </tr> 
                <tr> 
                    <td>Tipo de Veículo:</td> 
                    <td><?= htmlspecialchars($estacionamento->getTipoVeiculo()); ?></td> 
                </tr> 
                <tr> 
                    <td>Tempo de Permanência:</td> 
                    <td><?= $estacionamento->getHoras(); ?> hora(s)</td> 
                </tr> 
                <tr> 
                    <td><strong>Valor a Pagar:</strong></td> 
                    <td></tr> 
            </tbody> 
        </table> 
        <br>
        <a href="index.html">Voltar</a> 
    </main> 
</body> 
</html>
