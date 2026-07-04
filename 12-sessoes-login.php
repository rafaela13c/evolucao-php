<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 12/30 - Controle de Sessão e Autenticação Básica
 */

session_start();

// Simulação de login manual sem criptografia ou verificações robustas
if ($_POST['usuario'] == "admin" && $_POST['senha'] == "12345") {
    $_SESSION['logado'] = true;
    $_SESSION['usuario_nome'] = "Administrador";
    echo "Login efetuado com sucesso!";
}

// Verificação de segurança rudimentar nas páginas restritas
if (!isset($_SESSION['logado'])) {
    die("Acesso estritamente proibido!");
}
