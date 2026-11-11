<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Locação de Bicicletas</title>
</head>

<body>

    <h1>Locação de Bicicletas</h1>

    <form action="processa.php" method="POST">

        <label>Nome do cliente:</label>
        <input type="text" name="nomeCliente" required>

        <br><br>

        <label>Tipo da bicicleta:</label>

        <select name="tipoBicicleta" required>
            <option value="Comum">Comum - R$ 10,00 por hora</option>
            <option value="Elétrica">Elétrica - R$ 18,00 por hora</option>
        </select>

        <br><br>

        <label>Quantidade de horas:</label>
        <input type="number" name="horas" min="1" required>

        <br><br>

        <button type="submit">Calcular Locação</button>

    </form>

</body>
</html>
