<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triângulo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="formulario">
        <form method="post">
            <div class="titulo">
                <h1>Triângulo</h1>
            </div>
            <div class="divBase"><label for="base">Base do triângulo em centímetros</label><br>
                <input type="number" id="base" name="base" required><br>
            </div>
            <div class="divAltura"><label for="altura">Altura do triângulo em centímetros</label><br>
                <input type="number" id="altura" name="altura" required><br>
            </div>
            <button class = "calcularArea"type="submit" name="calcular_area">Calcular Área</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['calcular_area'])) {
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $area = ($base * $altura) / 2;
                echo "<p>A área do triângulo é $area cm</p>";

                if ($area > 100) {
                    echo '<p>A área do triângulo é maior que 100 cm</p>';
                } elseif ($area == 100) {
                    echo '<p>A área do triângulo é igual a 100 cm</p>';
                } else {
                    echo '<p>A área do triângulo é menor que 100 cm</p>';
                }
            }
        }
        ?>
    </div>
</body>

</html>