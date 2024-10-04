<?php
// Preço do carro à vista
$preco_avista = 22500.00;

// Valor da parcela
$valor_parcela = 489.65;

// Número de parcelas
$numero_parcelas = 60;

// Cálculo do valor total pago pelo financiamento
$total_financiado = $valor_parcela * $numero_parcelas;

// Cálculo dos juros pagos
$juros_pagos = $total_financiado - $preco_avista;

// Exibição dos resultados
echo "<h1>Financiamento do Carro</h1>";
echo "<p>Preço do carro à vista: R$ " . number_format($preco_avista, 2, ',', '.') . "</p>";
echo "<p>Total pago pelo financiamento: R$ " . number_format($total_financiado, 2, ',', '.') . "</p>";
echo "<p>Valor gasto com juros: R$ " . number_format($juros_pagos, 2, ',', '.') . "</p>";
?>