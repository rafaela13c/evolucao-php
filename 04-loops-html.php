<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 04/30 - Loops misturados com HTML sem formatação
 */
?>
<table border="1">
<?php
$i = 1;
// Uso de loops para gerar tabelas HTML injetadas direto no echo
while ($i <= 10) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "<td>" . $i . " x " . $j . " = " . $resultado . "</td>";
    }
    echo "</tr>";
    $i++;
}
?>
</table>
