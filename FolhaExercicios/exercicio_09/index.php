<?php
// Valor da moto à vista
$valor_avista = 8654.00;

// Número de parcelas e taxas de juros correspondentes
$parcelas = [
    24 => 0.02,  // 2% para 24 vezes
    36 => 0.023, // 2.3% para 36 vezes
    48 => 0.026, // 2.6% para 48 vezes
    60 => 0.029  // 2.9% para 60 vezes
];

// Função para calcular o valor da parcela com juros compostos
function calcular_parcela_composta($valor_avista, $parcelas, $taxa_juros) {
    // Cálculo do montante com juros compostos
    $montante = $valor_avista * pow((1 + $taxa_juros), $parcelas);
    // Cálculo do valor da parcela
    return $montante / $parcelas;
}

// Exibição dos resultados
echo "<h1>Financiamento da Moto - Juros Compostos</h1>";
echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr><th>Número de Parcelas</th><th>Taxa de Juros (%)</th><th>Valor da Parcela</th></tr>";

foreach ($parcelas as $num_parcelas => $taxa_juros) {
    $valor_parcela = calcular_parcela_composta($valor_avista, $num_parcelas, $taxa_juros);
    echo "<tr><td>$num_parcelas</td><td>" . number_format($taxa_juros * 100, 1) . "</td><td>R$ " . number_format($valor_parcela, 2, ',', '.') . "</td></tr>";
}

echo "</table>";
?>