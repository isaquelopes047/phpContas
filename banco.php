<?php

require_once 'funcoes.php'; 

/* 
    require: obrigatorio, php não roda o codigo abaixo dele se tiver algum erro
    require_once: ele ferifica se o arquivo já foi incluido antes, se sim, ele ignora qualquer erro e segue lendo o script
    include: não obrigatorio, php roda o codigo abaixo mesmo que não encontre o arquivo do include
*/

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Isaque',
        'Saldo' => 10000, 
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

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], valorASacar: 500);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], valorADepositar: 100);

unset($contasCorrentes['123.456.789-12']);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'Saldo' => $saldo] = $conta;
    exibeConta($conta);
}
echo "</ul>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?=$conta['titular'];?> - <?=$cpf;?></h3>
            </dt>
            <dd>
                Saldo: <?=$conta['Saldo'];?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>