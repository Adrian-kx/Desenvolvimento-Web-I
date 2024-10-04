<?php
// Valor da moto à vista
$valor_avista = 8654.00;

// Número de parcelas e taxas de juros correspondentes
$parcelas = [
    24 => 1.5,
    36 => 2.0,
    48 => 2.5,
    60 => 3.0
];

// Função para calcular o valor da parcela com juros simples
function calcular_parcela($valor_avista, $parcelas, $taxa_juros) {
    // Cálculo do montante com juros simples
    $montante = $valor_avista * (1 + ($taxa_juros / 100));
    // Cálculo do valor da parcela
    return $montante / $parcelas;
}

// Exibição dos resultados
echo "<h1>Financiamento da Moto</h1>";
echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr><th>Número de Parcelas</th><th>Taxa de Juros (%)</th><th>Valor da Parcela</th></tr>";

foreach ($parcelas as $num_parcelas => $taxa_juros) {
    $valor_parcela = calcular_parcela($valor_avista, $num_parcelas, $taxa_juros);
    echo "<tr><td>$num_parcelas</td><td>$taxa_juros</td><td>R$ " . number_format($valor_parcela, 2, ',', '.') . "</td></tr>";
}

echo "</table>";
?>