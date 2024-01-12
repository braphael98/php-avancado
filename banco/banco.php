<?php

//funções: =>



// => array das contas correntes:
$contasCorrentes = [
    '123.456.789.10' => [
        'titular' => 'Bruno Perez',
        'saldo' => 1000,
    ],
    '023.320.450-79' => [
        'titular' => 'Lucas Maciel',
        'saldo' => 300,
    ],
    '055.212.432-21' => [
        'titular' => 'Pedro da sailva',
        'saldo' => 1000,
    ],
    '012.321.534-44' => [
        'titular' => 'Claudia dos santos',
        'saldo' => 2000,
    ]

];

//para cada conta corrente como cpf (key) armazenar como conta.
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
        //para exibit mensagens de array associativo deve-se utilizar desta maneira;
    );
}


$contasCorrentes['023.320.450-79'] = sacar($contasCorrentes['023.320.450-79'], 100);

$contasCorrentes['123.456.789.10'] = sacar($contasCorrentes['123.456.789.10'], 100);

$contasCorrentes['055.212.432-21'] = depositar($contasCorrentes['055.212.432-21'], 200);
