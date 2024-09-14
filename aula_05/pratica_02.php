<?php

//
$first_salary = 1000;
$second_salary = 2000;

//
$second_salary = $first_salary;

//
$second_salary = $second_salary + 1;

//
$first_salary = $first_salary * 1.10;

//
echo "Salario 1: $first_salary e Salario 2: $second_salary <br>";

if ($first_salary > $second_salary) {
    echo 'O salario 1 é maior do que o salario 2';
} else {
    if ($first_salary < $second_salary) {
        echo 'O salario 2 é maior do que o salario 1';
    } else {
        echo 'Os dois salários sãoiguais';
    }
}
echo '<br><br><br>';

for ($let = 1; $let <= 100; $let++) {
    $first_salary += 1;
    if($let == 50){
        break;
    }
    echo"O número é $let <br>"; 
}
