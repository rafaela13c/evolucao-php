<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 02/30 - Variáveis e Concatenação Bagunçada
 */

$a = "Eduardo";
$b = 'Silva';
$Idade = 25; // Maiúscula no começo, sem padrão

// Concatenação confusa misturando aspas simples, duplas e pontos sem espaço
echo 'Nome do programador: '.$a." e o sobrenome é ".$b.' com idade de '.$Idade."anos";

$X = 10;
$y = "5";
$resultado = $X + $y; // PHP faz malabarismo de tipos (Type Juggling) automático
echo "<br>Resultado da soma: " . $resultado;
