<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras de Joãozinho</title>
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

        .result {
            margin-top: 20px;
            font-size: 18px;
        }

        .insufficient {
            color: red;
        }

        .sufficient {
            color: blue;
        }

        .exact {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Compras de Joãozinho</h1>
        <form method="post" action="">
            <label for="macas">Maçãs (R$ 5,00/Kg):</label>
            <input type="number" id="macas" name="macas" step="0.01" required><br><br>

            <label for="melancia">Melancia (R$ 3,00/Kg):</label>
            <input type="number" id="melancia" name="melancia" step="0.01" required><br><br>

            <label for="laranja">Laranjas (R$ 4,00/Kg):</label>
            <input type="number" id="laranja" name="laranja" step="0.01" required><br><br>

            <label for="repolho">Repolho (R$ 2,00/Kg):</label>
            <input type="number" id="repolho" name="repolho" step="0.01" required><br><br>

            <label for="cenoura">Cenouras (R$ 3,50/Kg):</label>
            <input type="number" id="cenoura" name="cenoura" step="0.01" required><br><br>

            <label for="batatinha">Batatinha (R$ 4,50/Kg):</label>
            <input type="number" id="batatinha" name="batatinha" step="0.01" required><br><br>

            <input type="submit" value="Calcular Total">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Preço por Kg dos produtos
            $precos = [
                'macas' => 5.00,
                'melancia' => 3.00,
                'laranja' => 4.00,
                'repolho' => 2.00,
                'cenoura' => 3.50,
                'batatinha' => 4.50,
            ];

            // Recebe a quantidade comprada em Kg
            $quantidades = [
                'macas' => $_POST['macas'],
                'melancia' => $_POST['melancia'],
                'laranja' => $_POST['laranja'],
                'repolho' => $_POST['repolho'],
                'cenoura' => $_POST['cenoura'],
                'batatinha' => $_POST['batatinha'],
            ];

            // Calcula o valor total da compra
            $total = 0;
            foreach ($quantidades as $produto => $quantidade) {
                $total += $quantidade * $precos[$produto];
            }

            // Valor disponível
            $valor_disponivel = 50.00;

            // Verifica a situação da compra
            if ($total > $valor_disponivel) {
                $valor_faltando = $total - $valor_disponivel;
                echo "<div class='result insufficient'>Faltam R$ " . number_format($valor_faltando, 2, ',', '.') . " para pagar a conta.</div>";
            } elseif ($total < $valor_disponivel) {
                $valor_sobra = $valor_disponivel - $total;
                echo "<div class='result sufficient'>Joãozinho ainda pode gastar R$ " . number_format($valor_sobra, 2, ',', '.') . ".</div>";
            } else {
                echo "<div class='result exact'>O saldo para compras foi esgotado.</div>";
            }

            // Exibe o total gasto
            echo "<div class='result'>Total gasto: R$ " . number_format($total, 2, ',', '.') . "</div>";
        }
        ?>
    </div>
</body>
</html>