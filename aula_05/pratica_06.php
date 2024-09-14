<?php
$disciplinas = [
    [
        'disciplina' => 'Matemática',
        'faltas' => 5,
        'media' => 8.5
    ],
    [
        'disciplina' => 'Português',
        'faltas' => 2,
        'media' => 9
    ],
    [
        'disciplina' => 'Geografia',
        'faltas' => 10,
        'media' => 6
    ],
    [
        'disciplina' => 'Educação Física',
        'faltas' => 2,
        'media' => 8
    ]
];

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Disciplina</th><th>Faltas</th><th>Média</th></tr>";

foreach ($disciplinas as $disciplina) {
    echo "<tr>";
    echo "<td>" . $disciplina['disciplina'] . "</td>";
    echo "<td>" . $disciplina['faltas'] . "</td>";
    echo "<td>" . $disciplina['media'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
