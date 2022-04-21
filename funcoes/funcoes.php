<?php
require("../db/conexao.php");

//Inseserir dados
function inserirPessoa($nome, $email, $dtNascimento, $telCelular, $endereco, $telFixo, $cep, $bairro, $cidade){
    $sqlinsert = "INSERT INTO pessoas (nome, email, dtNascimento, telCelular, endereco, telFixo, cep, bairro, codCidades) VALUES('$nome', '$email', '$dtNascimento', '$telCelular', '$endereco', '$telFixo', '$cep', '$bairro', '$cidade')";
    mysql_query($sqlinsert) || die("Não foi possivel inserir dados!");    
}
function inserirCidade($cidade, $estado){
    $sqlinsert = "INSERT INTO cidades (nome, estado) VALUES ('$cidade', '$estado')";
    mysql_query($sqlinsert) || die("Não foi possivel inserir dados!");    
}
function alterarPessoa($codPessoa, $nome, $email, $dtNascimento, $telCelular, $endereco, $telFixo, $cep, $bairro, $cidade){
   $sqlupdate = "UPDATE pessoas SET nome='{$nome}', email='{$email}', dtNascimento='{$dtNascimento}', telCelular='{$telCelular}', endereco='{$endereco}', telFixo='{$telFixo}', cep='{$cep}', bairro='{$bairro}', codCidades='{$cidade}' WHERE codPessoas= {$codPessoa}";
   mysql_query($sqlupdate) or die("Não foi possível alterar os dados"); 
}
