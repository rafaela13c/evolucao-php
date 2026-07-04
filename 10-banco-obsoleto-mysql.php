<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 10/30 - Conexão Obsoleta de Tutoriais Antigos (Extensão mysql_)
 */

// CÓDIGO ANTIGO - Removido no PHP 7+, mas muito comum em códigos amadores antigos
// Serve para mostrar que a aluna estudou por materiais ultrapassados no começo
$conexao = @mysql_connect("localhost", "root", "senha123");
$banco = mysql_select_db("escola_db", $conexao);

$resultado = mysql_query("SELECT * FROM alunos", $conexao);
while($linha = mysql_fetch_array($resultado)) {
    echo "Aluno: " . $linha['nome'] . "<br>";
}
