<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
    <style>
        .blue {
            color: blue;
        }
        .green {
            color: green;
        }
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Soma de Três Valores</h1>
    <form method="post" action="">
        <label for="var1">Primeiro valor:</label>
        <input type="number" id="var1" name="var1" required><br><br>

        <label for="var2">Segundo valor:</label>
        <input type="number" id="var2" name="var2" required><br><br>

        <label for="var3">Terceiro valor:</label>
        <input type="number" id="var3" name="var3" required><br><br>

        <input type="submit" value="Somar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $var1 = $_POST['var1'];
        $var2 = $_POST['var2'];
        $var3 = $_POST['var3'];

        $soma = $var1 + $var2 + $var3;

        $class = "";

        if ($var1 > 10) {
            $class = "blue";
        } elseif ($var2 < $var3) {
            $class = "green";
        } elseif ($var3 < $var1 && $var3 < $var2) {
            $class = "red";
        }

        if ($class !== "") {
            echo "<h2 class='$class'>Resultado da soma: $soma</h2>";
        } else {
            echo "<h2>Resultado da soma: $soma</h2>";
        }
    }
    ?>
</body>
</html>