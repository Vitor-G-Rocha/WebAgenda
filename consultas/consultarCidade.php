<?php
require("../db/conexao.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta</title>
        <link rel="shortcut icon" href="../Img/agenda.ico">        
        <link rel="stylesheet" type="text/css" href="../menu.css">
        <script lang='JavaScript' type='text/javascript' src="../menujs.js"></script>
    </head>        
    <body> 
        <div id='cssmenu'>
            <ul>
                <li class='active'><a href='../index.php'>Home</a></li>
                <li><a href='../formularios/cadastrarPessoa.php'>Cadastrar Pessoa</a></li>                                
            </ul>
        </div> 
        <br>
    <center>
        <form action="../consultas/resultadoCidade.php">
            <fieldset><legend><b><font size="5">Consultar Cidade(s)</font></b><br></legend></fieldset> 
            <fieldset>
                <legend><b><font size="3">Pesquisar Cidade(s):</font></b></legend><br>                           
                <ul class="input-list style-1 clearfix">                    
                    <b><font size="3">Nome:</font></b>  
                    <input type="text" placeholder="Nome para consulta" name="consulta" size="25"/><br>                                
                </ul>                
                <input class="btn" type="submit" value="Consultar" name="consultar"/>           
            </fieldset>      
        </form>
    </center>
</body>
</html>


