<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 14/30 - Proteção Definitiva Contra SQL Injection
 */

// A programadora aprendeu a usar Prepared Statements com marcadores seguros (:id)
$pdo = new PDO("mysql:host=localhost;dbname=sistema", "root", "");

$idBuscado = $_GET['id'] ?? 0;

$sql = "SELECT nome, email FROM usuarios WHERE id = :id AND status = :status";
$stmt = $pdo->prepare($sql);

// Vinculando os parâmetros de forma segura
$stmt->bindValue(':id', $idBuscado, PDO::PARAM_INT);
$stmt->bindValue(':status', 'ativo', PDO::PARAM_STR);
$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($usuario);
