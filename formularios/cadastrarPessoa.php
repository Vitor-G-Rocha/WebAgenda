<?php
require("../db/conexao.php");

$query = "SELECT * FROM cidades";
$result = mysql_query($query) or die(mysql_error() . "[" . $query . "]");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="shortcut icon" href="../Img/agenda.ico">        
        <link rel="stylesheet" type="text/css" href="../menu.css">   
        <script lang='JavaScript' type='text/javascript' src="../jquery.js"></script> 
        <script lang='JavaScript' type='text/javascript' src="../jquery.maskedinput.js"></script>
    </head>   
    <script type="text/javascript">
        $(document).ready(function () {
            $("input.data").mask("99/99/9999");
            $("input.telFix").mask("(99)9999-9999");
            $("input.telCel").mask("(99)99999-9999");
            $("input.cep").mask("99999-999");
        });
    </script>
    <body>  
        <div id='cssmenu'>
            <ul>                   
                <li class='active'><a href='../index.php'>Home</a></li>   
                <li><a href="../consultas/consultarPessoa.php">Consultar Contato(s)</a></li> 
                <li><a href="cadastrarCidade.php">Cadastrar Cidade(s)</a></li>
            </ul>
        </div>  
        <br>
    <center>
        <form name="cadastrarPessoa" onsubmit="return validateForm()" action="../dao/inserirPessoa.php" method="POST">            
            <fieldset class="fieldset1"><legend><b>Cadastro de Pessoas</b><br><font size="2,5" color="red">*</font><font size="1" color="gray">Deverá ser preenchido</font></legend></fieldset>             
            <fieldset>                
                <ul class="input-list style-1 clearfix">                    
                    <b><font color="red">*</font>Nome:</b><br><input required type="text" placeholder="Seu nome completo" name="nome" size="25"/><br>
                    <br><b><font color="red">*</font>Dt. Nascimento:</b><br><input required placeholder="DD/MM/AAAA" class="data" type="text" name="dtNascimento" size="25"/><br>
                    <br><b>E-mail:</b><br><input type="text" placeholder="email@email.com" name="email" size="25" /><br>
                    <br><b><font color="red">*</font>Tel. Celular:</b><br><input required type="text"  placeholder="(xx)xxxxx-xxxx" class="telCel" name="telCelular" size="25"/>
                    <br><b><font color="red"></font>Tel. Fixo:</b><br><input type="text" placeholder="(xx)xxxx-xxxx" class="telFix" name="telFixo" size="25" />
                    <br><b><font color="red">*</font>Rua:</b><br><input required type="text" placeholder="Rua" name="endereco" size="25"/>
                    <br><b><font color="red">*</font>Bairro:</b><br><input required type="text" placeholder="Bairro" name="bairro" size="25"/>
                    <br><b><font color="red">*</font>CEP:</b><br><input required type="text" class="cep" placeholder="CEP" name="cep" size="25"/>                    
                    <br><b><font color="red">*</font>Cidade:</b><br>
                    <div class="styled-select">  
                        <select name="cidade">                            
                            <?php
                            while ($row = mysql_fetch_array($result)) {
                                echo "<option value='" . $row['codCidades'] . "'>" . $row['nome'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>                    
                </ul>
                <fieldset>
                    <input class="btn" type="submit" value="Salvar" name="salvar" />
                    <input class="btn" type="reset" value="Limpar" name="cancelar" />                    
                </fieldset>                
            </fieldset>            
        </form>   
    </center>
</body>
</html>