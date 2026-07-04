<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 18/30 - Paginação de Dados Segura e Estruturada
 */

// A programadora cria algoritmos complexos no modo procedural seguro
$pdo = new PDO("mysql:host=localhost;dbname=escola", "root", "");

$paginaAtual = filter_input(INPUT_GET, 'pagina', FILTER_VALIDATE_INT) ?: 1;
$itensPorPagina = 5;
$offset = ($paginaAtual - 1) * $itensPorPagina;

$stmt = $pdo->prepare("SELECT * FROM turmas LIMIT :limite OFFSET :deslocamento");
$stmt->bindValue(':limite', $itensPorPagina, PDO::PARAM_INT);
$stmt->bindValue(':deslocamento', $offset, PDO::PARAM_INT);
$stmt->execute();

$turmas = $stmt->fetchAll(PDO::FETCH_ASSOC);
