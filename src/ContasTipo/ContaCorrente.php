<?php

declare(strict_types=1);

namespace Pablo\ContaBancaria\ContasTipo;
use Pablo\ContaBancaria\ContaBancaria;


class ContaCorrente extends ContaBancaria
{
    const TAXA=25;
    const TIPO_CONTA = "Conta Corrente";

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        string $saldo
    ){
        parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo);        
    }

    public function obterSaldo(): string
    {
        return 'Seu saldo é: R$ ' . number_format(($this->saldo - self::TAXA), 2, ',', '');
    }
}