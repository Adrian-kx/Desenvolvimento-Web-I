<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área de um Quadrado</title>
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
        <h1>Calculadora de Área de um Quadrado</h1>
        <form method="post" action="">
            <label for="lado">Digite o comprimento do lado (em metros):</label>
            <input type="number" id="lado" name="lado" required><br><br>

            <input type="submit" value="Calcular Área">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe o valor do lado
            $lado = $_POST['lado'];

            // Calcula a área do quadrado
            $area = $lado * $lado;

            // Monta a frase de resultado
            echo "<h1>A área do quadrado de lado $lado metros é $area metros quadrados.</h1>";
        }
        ?>
    </div>
</body>
</html>