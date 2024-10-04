<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Divisibilidade por 2</title>
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

        .result {
            margin-top: 20px;
            font-size: 20px;
            color: #333;
        }

        .divisible {
            color: green;
        }

        .not-divisible {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Teste de Divisibilidade por 2</h1>
        <form method="post" action="">
            <label for="number">Digite um número:</label>
            <input type="number" id="number" name="number" required><br><br>

            <input type="submit" value="Testar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe o número do formulário
            $number = $_POST['number'];

            // Testa se o número é divisível por 2
            if ($number % 2 == 0) {
                echo "<div class='result divisible'>Valor divisível por 2</div>";
            } else {
                echo "<div class='result not-divisible'>O valor não é divisível por 2</div>";
            }
        }
        ?>
    </div>
</body>
</html>