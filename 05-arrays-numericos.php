<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 05/30 - Arrays Numéricos e Iteração Manual
 */

// Usando a sintaxe antiga array() e definindo chaves sem padrão
$alunos = array();
$alunos[0] = "Carlos";
$alunos[1] = "Ana";
$alunos[5] = "Mariana"; // Pulou índices do nada

echo "O aluno na posição 5 é: " . $alunos[5] . "<br><br>";

// Foreach simples listando chaves e valores perdidos
foreach ($alunos as $chave => $valor) {
    echo "Índice: " . $chave . " - Nome: " . $valor . "<br>";
}
