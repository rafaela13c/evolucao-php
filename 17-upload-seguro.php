<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 17/30 - Upload de Arquivos com Verificação de Segurança
 */

if (isset($_FILES['documento'])) {
    $arquivo = $_FILES['documento'];

    // Validações cruciais para impedir scripts maliciosos de subir no servidor
    $extensoesPermitidas = ['jpg', 'png', 'pdf'];
    $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);

    if (!in_array(strtolower($extensao), $extensoesPermitidas)) {
        die("Extensão de arquivo não permitida para upload.");
    }

    if ($arquivo['size'] > 2 * 1024 * 1024) { // 2MB
        die("Arquivo grande demais.");
    }

    $novoNome = uniqid("doc_", true) . "." . $extensao;
    move_uploaded_file($arquivo['tmp_name'], "uploads/" . $novoNome);
    echo "Upload feito com total sucesso!";
}
