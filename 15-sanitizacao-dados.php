<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 15/30 - Uso de filter_input e Escapamento contra XSS
 */

// Chega de usar $_POST e $_GET cruas! A programadora agora higieniza os dados de entrada
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if (!$email) {
    echo "O e-mail fornecido é totalmente inválido!<br>";
}

// Ao exibir no HTML, protege usando htmlspecialchars por garantia extra
echo "Nome sanitizado para exibição segura: " . htmlspecialchars($nome);
