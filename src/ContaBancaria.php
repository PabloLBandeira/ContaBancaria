<?php

declare(strict_types=1);

namespace Pablo\ContaBancaria;

class ContaBancaria {
  public string $banco = "Banco Santo André";
  public string $nomeTitular = "André do Banco";
  public string $numeroAgencia = "1334";
  public string $numeroConta = "9876-0";
  public float $saldo = 0;

  public function exibirDadosConta() :array {
    return [
      'banco' => $this->banco,
      'nomeTitular' => $this ->nomeTitular,
      'numeroAgencia' => $this ->numeroAgencia,
      'numeroConta' => $this ->numeroConta,
      'saldo' => $this->saldo,
    ]; 
    
  }
}

