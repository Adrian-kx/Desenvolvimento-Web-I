<?php

// $carros = array("BMW", "Volvo", "Toyota");
// echo "Eu gosto da marca de carro " . $carros[0] . ", " . $carros[1] . ", " . $carros[2];

// var_dump($carros);

$idades = array("João" => "45", "Maria" => "89");
foreach ($idades as $chave => $valor) {
    echo "Chave = " . $chave . ", Valor = " . $valor;
    echo "<br>";
}
