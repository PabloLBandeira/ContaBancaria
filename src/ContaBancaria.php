<?php

declare(strict_types=1);

namespace Pablo\ContaBancaria;

abstract class ContaBancaria 
{
  protected string $banco;
  protected string $nomeTitular;
  protected string $numeroAgencia;
  protected string $numeroConta;
  protected float $saldo;

  public function __construct(
    string $banco,
    string $nomeTitular,
    string $numeroAgencia,
    string $numeroConta,
    float $saldo,
  )
  {
    $this->banco = $banco;
    $this->nomeTitular = $nomeTitular;
    $this->numeroAgencia = $numeroAgencia;
    $this->numeroConta = $numeroConta;
    $this->saldo = $saldo;
  }

  public function exibirDadosConta() :array {
    return [
      'banco' => $this->banco,
      'nomeTitular' => $this->nomeTitular,
      'numeroAgencia' => $this->numeroAgencia,
      'numeroConta' => $this->numeroConta,
      'saldo' => $this->saldo,
    ]; 
    
  }

  public function depositar(float $valor): string {
    $this->saldo += $valor;
    return 'Depósito de R$ ' . number_format($valor, 2, ',', ''). ' realizado';
  }
  
  public function sacar (float $valor): string {
    $this-> saldo -= $valor;
    return 'Saque de R$ ' . number_format($valor, 2, ',', ''). ' realizado';
  }
  
  public abstract function obterSaldo (): string;

  public function getBanco(): string {
    return $this->banco;    
  }

  public function getnomeTitular(): string {
    return $this->nomeTitular;    
  }

  public function getnumeroAgencia(): string {
    return $this->numeroAgencia;    
  }

  public function getnumeroConta(): string {
    return $this->numeroConta;    
  }

}
