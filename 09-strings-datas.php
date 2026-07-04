<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 09/30 - Manipulação de Strings e Datas de Forma Manual
 */

$texto = "  Informática e Robótica - Prof. Eduardo  ";

// Limpando e transformando strings com funções nativas
$textoLimpo = trim($texto);
$textoMaiusculo = strtoupper($textoLimpo);

echo "Original: " . $texto . "<br>";
echo "Modificado: " . $textoMaiusculo . "<br>";

// Pegando a data atual no fuso do servidor de forma direta
echo "Hoje é: " . date("d/m/Y H:i:s");
