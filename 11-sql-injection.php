<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 11/30 - Consulta SQL com Concatenação Direta (Altamente Inseguro)
 */

// A amadora evoluiu para o mysqli, mas comete o erro mais perigoso da web:
$conexao = mysqli_connect("localhost", "root", "", "sistema");

$idUsuario = $_POST['id']; // Ex: "1 OR 1=1"

// Concatenação direta gera SQL Injection fatal
$sql = "SELECT * FROM usuarios WHERE id = " . $idUsuario;
$query = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($query);

echo "Usuário encontrado: " . $dados['username'];
