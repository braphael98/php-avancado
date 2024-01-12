<?php


echo "Arquivo de funçôes rodando". PHP_EOL;
function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}
//list = ($idadeBruno, $idadeJoao, $idadeMaria) = $idadeList;









//função para colocar o nome da conta em caps, porem nao é interessante neste codigo;
function titularCaps(array &$conta)
{
$conta['titular'] = strtoupper($conta['titular']);
echo $conta ['titular'].PHP_EOL;

};
