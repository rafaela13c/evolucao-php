<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 20/30 - Encapsulamento com Métodos e Getters/Setters
 */

class Produto
{
    private string $nome;
    private float $preco;

    // Uso correto do método construtor
    public function __construct(string $nome, float $precoInicial) {
        $this->nome = $nome;
        $this->setPreco($precoInicial);
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setPreco(float $preco): void {
        if ($preco < 0) {
            throw new Exception("Preço de um item não pode ser negativo!");
        }
        $this->preco = $preco;
    }

    public function getPreco(): float {
        return $this->preco;
    }
}
