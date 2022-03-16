<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Isaque',
        'Saldo' => 1000, 
    ],
    '123.456.789-11' => [
        'titular' => 'Ronaldo',
        'Saldo' => 1500,
    ],
    '123.456.789-12' => [
        'titular' => 'Eliane',
        'Saldo' => 3000,
    ],
];

$contasCorrentes['321.512.421-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}