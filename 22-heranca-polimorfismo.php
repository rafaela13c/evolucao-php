<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 22/30 - Herança de Classes para Reuso de Atributos
 */

abstract class Funcionario
{
    protected string $nome;
    protected float $salarioBase;

    public function __construct(string $nome, float $salarioBase) {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    abstract public function calcularSalario(): float;
}

class ProfessorRobotica extends Funcionario
{
    public function calcularSalario(): float {
        return $this->salarioBase + 500.00;
    }
}
