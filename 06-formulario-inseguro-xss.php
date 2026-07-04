<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 06/30 - Injeção Direta de Variáveis Globais (Vulnerável)
 */
?>
<html>
<body>
<form method="GET" action="">
    <input type="text" name="nome" placeholder="Digite seu nome">
    <button type="submit">Enviar</button>
</form>
<?php
// PERIGO: Pegando dado direto da URL sem verificar se existe (Gera Notice) e sem limpar (XSS)
$nomeDigitado = $_GET['nome'];
echo "<h1>Seja bem-vindo: " . $nomeDigitado . "</h1>";
// Se digitar <script>alert('hack')</script>, o script executa!
?>
</body>
</html>
