<?php


$conta1 = [
    'Nome' => 'Isaque',
    'Saldo' => 1000,
];
$conta2 = [
    'Nome' => 'Ronaldo',
    'Saldo' => 1500,
];
$conta3 = [
    'Nome' => 'Eliane',
    'Saldo' => 3000,
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['Nome'] . PHP_EOL; //assim acessamos o indice exato do array
}