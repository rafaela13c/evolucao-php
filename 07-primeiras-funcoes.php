<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 07/30 - Primeiras Funções e Escopo de Variáveis Ruim
 */

$taxa_adicional = 15;

// Função amadora usando palavra-chave 'global' para puxar variáveis de fora
function calcularTotal($preco, $quantidade) {
    global $taxa_adicional;

    $subtotal = $preco * $quantidade;
    $total = $subtotal + $taxa_adicional;

    return $total;
}

echo "Total do Pedido: R$ " . calcularTotal(100, 2);
