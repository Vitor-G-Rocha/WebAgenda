<?php
/*Setando a conexão com o MySQL*/
$local_server = "localhost";
$usuario_server = "root";
$senha_server = "root";
$banco_de_dados = "webagenda";

/*Fazer conexão com o DB*/
$conexao = @mysql_connect($local_server, $usuario_server, $senha_server) || die("Não foi possível conectar com o servidor!");

/*Conversão caracteres para Pt-Br*/
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

/*Estabelece conexão com o DB*/
$db = @mysql_select_db($banco_de_dados) || die("Banco de dados não encontrado!");


