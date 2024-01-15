<?php

require_once('funcoes.php');
// pode-se utilizar varias formas de importar os arquivos, via require, require_once, ou include;
//Estamos incluindo o arquivo de funçôes no nosso programa;

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000,
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300,
    ],
    '123.256.789-12' => [
        'titular' => 'Bruno',
        'saldo' => 100

    ]

];


//$idadeList = [21, 23, 43, 19, 22, 10, 49]; 

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);


unset($contasCorrentes['123.456.689-11']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular'];?> - <?php echo $cpf; ?>
            </dt>
            </h3>
            <dd>Saldo: R$ <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>

</html>