<?php
include '../funcoes/funcoes.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$dtNascimento = $_POST['dtNascimento'];
$telCelular = $_POST['telCelular'];
$endereco = $_POST['endereco'];
$telFixo = $_POST['telFixo'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];

$dtNascimento = implode("-", array_reverse(explode("/", $dtNascimento)));

inserirPessoa($nome, $email, $dtNascimento, $telCelular, $endereco, $telFixo, $cep, $bairro, $cidade);
?>
<html>
    <head>
        <meta http-equiv="refresh" content="4;url=../formularios/cadastrarPessoa.php" />
        <title>Dados inseridos!</title>
        <link rel="stylesheet" type="text/css" href="../agendacss.css">
    </head>
    <body style="background-color: #f2f2f2">
    <center>
        <fieldset class="fieldset3"><b>Dados inseridos com sucesso!<br>Redirecionando...</b></fieldset>
    </center>
</body>
</html>

