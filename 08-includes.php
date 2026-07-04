<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 08/30 - Divisão em Arquivos Usando Include Simples
 */

// O amador descobriu que pode reaproveitar o layout do site
// Mas usa include comum (se o arquivo não existir, o site continua com erro feio)
include "layout_header_ficticio.php";

echo "<main><h2>Conteúdo Principal da Página</h2><p>Aqui fica o texto.</p></main>";

include "layout_footer_ficticio.php";
