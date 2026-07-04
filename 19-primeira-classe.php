<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 19/30 - Introdução à Orientação a Objetos (Classes como Estruturas)
 */

// A programadora conhece a POO, mas usa apenas como agrupamento de variáveis (Data Clump)
class Aluno
{
    // Atributos públicos sem proteção ou encapsulamento
    public $nome;
    public $matricula;
    public $notaRobotica;
}

$aluno1 = new Aluno();
$aluno1->nome = "Rafaela Cristina";
$aluno1->matricula = "2026001";
$aluno1->notaRobotica = 10.0;

echo "Aluno: " . $aluno1->nome . " - Nota: " . $aluno1->notaRobotica;
