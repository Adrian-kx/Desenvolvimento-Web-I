<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área de um Retângulo</title>
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

        h1, h3 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Área de um Retângulo</h1>
        <form method="post" action="">
            <label for="ladoA">Digite o lado A (em metros):</label>
            <input type="number" id="ladoA" name="ladoA" required><br><br>

            <label for="ladoB">Digite o lado B (em metros):</label>
            <input type="number" id="ladoB" name="ladoB" required><br><br>

            <input type="submit" value="Calcular Área">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe os valores dos lados A e B
            $ladoA = $_POST['ladoA'];
            $ladoB = $_POST['ladoB'];

            // Calcula a área do retângulo
            $area = $ladoA * $ladoB;

            // Monta a frase de resultado
            $resultado = "A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.";

            // Verifica se a área é maior que 10 e exibe o resultado em h1 ou h3
            if ($area > 10) {
                echo "<h1>$resultado</h1>";
            } else {
                echo "<h3>$resultado</h3>";
            }
        }
        ?>
    </div>
</body>
</html>