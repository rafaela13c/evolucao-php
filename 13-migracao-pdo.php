<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 13/30 - Migração de Paradigma para PDO com Try/Catch
 */

// A programadora descobre o PDO e aprende a tratar erros de conexão de forma correta
$dsn = "mysql:host=localhost;dbname=projeto_escola;charset=utf8";
$usuario = "root";
$senha = "";

try {
    $pdo = new PDO($dsn, $usuario, $senha);
    // Configura o PDO para disparar exceções em caso de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão estabelecida com sucesso via PDO!";
} catch (PDOException $e) {
    // Evita expor a senha no erro tratando a mensagem
    echo "Erro técnico ao tentar conectar ao banco de dados.";
    // No mundo real, salvaríamos $e->getMessage() em um log
}
