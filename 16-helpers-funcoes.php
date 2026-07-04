<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 16/30 - Centralização de Funções Reutilizáveis (Helpers)
 */

// A programadora cria um arquivo utilitário central para parar de repetir código de validação
function formatarMoeda(float $valor): string {
    return "R$ " . number_format($valor, 2, ',', '.');
}

function estaLogado(): bool {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return isset($_SESSION['usuario_id']);
}

// Exemplo de uso:
echo formatarMoeda(1550.75);
