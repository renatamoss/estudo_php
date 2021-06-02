<?php

require_once 'banco-funcoes.php';
// busca o arquivo banco-funcoes.php. Outras formas de chamar arquivo componetizado:
// include: caso o arquivo não seja encontrado, include irá lançar um aviso (E_WARNING)
// require: caso o arquivo não seja encontrado, require irá lançar um erro e não permitirá a execução do programa
// requere_once:  garante que o arquivo será incluído apenas uma vez

$contasCorrentes = [
    12345678910 =>  [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12345678912 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['12345678910'] = sacar(
    $contasCorrentes['12345678910'],
    '600'
);

$contasCorrentes['12345678911'] = depositar(
    $contasCorrentes['12345678911'],
    52324
);

//removendo um item da lista com unset:
unset($contasCorrentes['12345678912']); 

titularComLetrasMaiusculas($contasCorrentes['12345678910']);

//outra forma de escrever(strings complexas):
// exibeMensangem("$cpf {$conta['titular']} {$conta['saldo']}"); ou
// exibeMensangem("$cpf $conta[titular] $conta[saldo]");

//tipos de ERROS do PHP:
// E_NOTICE, PHP dá um aviso mas "se vira" e continua com a execução
// E_ERROR, PHP dá erro e para a execução do programa

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas correntes</title>
</head>

<body>

    <h1>Contas correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>

</body>

</html>