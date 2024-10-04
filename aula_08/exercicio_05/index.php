<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área de um Triângulo Retângulo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input[type="number"] {
            padding: 5px;
            margin: 10px 0;
            width: 100px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Área de um Triângulo Retângulo</h1>
        <form method="post" action="">
            <label for="base">Digite a base (em metros):</label>
            <input type="number" id="base" name="base" required><br><br>

            <label for="altura">Digite a altura (em metros):</label>
            <input type="number" id="altura" name="altura" required><br><br>

            <input type="submit" value="Calcular Área">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe os valores da base e altura
            $base = $_POST['base'];
            $altura = $_POST['altura'];

            // Calcula a área do triângulo retângulo
            $area = ($base * $altura) / 2;

            // Monta a frase de resultado
            echo "<h1>A área do triângulo de base $base metros e altura $altura metros é $area metros quadrados.</h1>";
        }
        ?>
    </div>
</body>
</html>