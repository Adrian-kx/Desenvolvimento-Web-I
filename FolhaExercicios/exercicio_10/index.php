<?php
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb",
            "bancoDados 1",
            "ebgSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);

// Função recursiva para imprimir a árvore
function imprimirArvore($array, $nivel = 0) {
    foreach ($array as $chave => $valor) {
        // Aumenta a indentação com base no nível da árvore
        echo str_repeat("&nbsp;", $nivel * 4); // 4 espaços
        if (is_array($valor)) {
            // Se o valor é um array, imprime a chave e chama a função recursivamente
            echo "<strong>$chave</strong><br>";
            imprimirArvore($valor, $nivel + 1);
        } else {
            // Se não for um array, imprime o valor
            echo str_repeat("&nbsp;", ($nivel + 1) * 4); // 4 espaços para a próxima linha
            echo "$valor<br>";
        }
    }
}

// Chamando a função para imprimir a árvore
echo "<h1>Árvore de Pastas</h1>";
imprimirArvore($pastas);
?>