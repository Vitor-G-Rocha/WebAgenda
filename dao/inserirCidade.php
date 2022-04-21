<?php
include '../funcoes/funcoes.php';

$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

inserirCidade($cidade, $estado);
?>
<html>
    <head>
        <meta http-equiv="refresh" content="3;url=../formularios/cadastrarPessoa.php" />
        <title>Dados inseridos!</title>
        <link rel="stylesheet" type="text/css" href="../agendacss.css">
    </head>
    <body style="background-color: #f2f2f2">
    <center>
        <fieldset class="fieldset1"><legend><b>Dados inseridos com sucesso!<br>Redirecionando...</b></legend></fieldset>
    </center>
    </body>
</html>

