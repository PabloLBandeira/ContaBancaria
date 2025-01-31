<?php

require __DIR__ . '/../vendor/autoload.php'; 

use Pablo\ContaBancaria\ContasTipo\ContaPoupanca;

$conta = new ContaPoupanca(
    'Banco Santo André',
    'André do Banco',
    '1234',
    '12345-0',
    0.0
);

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->depositar(50);
echo PHP_EOL;

echo $conta->sacar(20);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;