<?php

function sacar(array $conta, float $valorASacar)
{
    if($valorASacar > $conta['Saldo']){
        exibeMensagem( mensagem: "Você não pode sacar este valor, saldo insuficiente");
    }else{
        $conta['Saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar)
{
    if($valorADepositar <= 0){
        exibeMensagem( mensagem: "VocÊ não pode depositar um valor igual a 0 ou menos");
    }else{
        $conta['Saldo'] += $valorADepositar;
    }
    return $conta;
}

function exibeMensagem( string $mensagem)
{
    echo $mensagem . '<br>';
};

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta){
    ['titular' => $titular, 'Saldo' => $Saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $Saldo</li>";
}