<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 03/30 - Condicionais e Lógica Redundante
 */

$usuario_logado = true;
$nivel_acesso = "admin";

// Erro clássico de amador: comparar booleano com true de forma redundante
if ($usuario_logado == true) {
    echo "Usuário está no sistema!<br>";

    // Ninhos de IFs (Hadouken de código)
    if ($nivel_acesso == "admin") {
        echo "Você pode deletar tudo!";
    } else {
        if ($nivel_acesso == "editor") {
            echo "Você só pode editar.";
        } else {
            echo "Você é visitante.";
        }
    }
} else {
    echo "Acesso negado.";
}
