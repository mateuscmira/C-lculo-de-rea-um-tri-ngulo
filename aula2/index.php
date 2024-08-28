<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de temperatura</title>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['converter_para_fahrenheit'])) {
            $celsius = $_POST['celsius'];
            $fahrenheit = ($celsius * 9 / 5) + 32;
            echo "$celsius °C é igual a $fahrenheit °F";
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['converter_para_celsius'])) {
            $fahrenheit = $_POST['fahrenheit'];
            $celsius = ($fahrenheit - 32)/ 1.8;
            echo "$fahrenheit °F é igual a $celsius °C";
        }
    }
    ?>
    <form method="post">
        <h1>Questão 3</h1>
        <label for="celsius">Temperatura em Celsius</label>
        <input type="number" id="celsius" name="celsius" step="0.01" required>
        <button type="submit" name="converter_para_fahrenheit">Converter Para Fahrenheit</button>
    </form>
    <form method="post">
        <h1>Questão 3</h1>
        <label for="fahrenheit">Temperatura em fahrenheit</label>
        <input type="number" id="fahrenheit" name="fahrenheit" step="0.01" required>
        <button type="submit" name="converter_para_celsius">Converter Para Celsius</button>
    </form>

</body>

</html>