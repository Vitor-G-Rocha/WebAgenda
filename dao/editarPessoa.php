<?php
//ECHO
/*
echo $codPessoa; echo "<br>";
echo $nome; echo "<br>";
echo $email; echo "<br>";
echo $dtNascimento; echo "<br>";
echo $telCelular; echo "<br>";
echo $endereco; echo "<br>";
echo $telFixo; echo "<br>";
echo $cep; echo "<br>";
echo $bairro; echo "<br>";
echo $cidade; echo "<br>";
 */
include '../funcoes/funcoes.php';

$codPessoa = $_POST['codPessoa'];
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

alterarPessoa($codPessoa, $nome, $email, $dtNascimento, $telCelular, $endereco, $telFixo, $cep, $bairro, $cidade);
?>
<html>
    <head>
        <meta http-equiv="refresh" content="5;url=../consultas/consultarPessoa.php" />
        <link rel="stylesheet" type="text/css" href="../menu.css">
        <title>Dados alterados!</title>        
    </head>
    <body class="load">
    <center>
        <fieldset><b>Dados alterados com sucesso!</b></fieldset>
    </center>
</body>
</html>

