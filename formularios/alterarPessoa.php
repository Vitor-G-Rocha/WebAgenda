<?php
$codPessoa = $_GET['codigo'];
require("../db/conexao.php");

$queryCidade = mysql_query("SELECT * FROM cidades ORDER BY nome");

$comandoSql = "SELECT p.*, c.nome AS 'cidade' FROM pessoas p JOIN cidades c ON c.codCidades = p.codCidades AND p.codPessoas = ".$codPessoa;

$resultadoSql = mysql_query($comandoSql);
$pessoa = mysql_fetch_assoc($resultadoSql);
$pessoa['dtNascimento'] = implode("/", array_reverse(explode("-", $pessoa['dtNascimento'])));
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterar Cadastro</title>
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
                </ul>
            </div>  
        <br>
    <center>
        <form name="editarPessoa" action="../dao/editarPessoa.php" method="POST">            
            <fieldset class="fieldset1"><legend><b>Cadastro de Pessoas</b><br><font size="2,5" color="red">*</font><font size="1" color="gray">Deverá ser preenchido</font></legend></fieldset>             
            <fieldset>                
                <ul class="input-list style-1 clearfix">                    
                    <b><font color="red">*</font>Nome:</b><br><input required type="text" placeholder="Seu nome completo" value="<?=$pessoa['nome']?>" name="nome" size="25"/><br>
                    <br><b><font color="red">*</font>Dt. Nascimento:</b><br><input required placeholder="DD/MM/AAAA" class="data" type="text" name="dtNascimento" value="<?=$pessoa['dtNascimento']?>" size="25"/><br>
                    <br><b>E-mail:</b><br><input type="text" placeholder="email@email.com" name="email" value="<?=$pessoa['email']?>" size="25" /><br>
                    <br><b><font color="red">*</font>Tel. Celular:</b><br><input required type="text" class="telCel" placeholder="(xx)xxxx-xxxx" value="<?=$pessoa['telCelular']?>" name="telCelular" size="25"/>
                    <br><b><font color="red"></font>Tel. Fixo:</b><br><input type="text" class="telFix" placeholder="(xx)xxxx-xxxx" value="<?=$pessoa['telFixo']?>" name="telFixo" size="25" />
                    <br><b><font color="red">*</font>Rua:</b><br><input required type="text" placeholder="Rua" value="<?=$pessoa['endereco']?>" name="endereco" size="25"/>
                    <br><b><font color="red">*</font>Bairro:</b><br><input required type="text" placeholder="Bairro" value="<?=$pessoa['bairro']?>" name="bairro" size="25"/>
                    <br><b><font color="red">*</font>CEP:</b><br><input required type="text" class="cep" placeholder="CEP" value="<?=$pessoa['cep']?>" name="cep" size="25"/>
                    <br><b><font color="red">*</font>Cidade:</b><br>
                    <label>
                        <select name="cidade">                           
                            <?php while($cidade = mysql_fetch_array($queryCidade)) { ?>
                            <option value="<?php echo $cidade['codCidades'] ?>"<?php if ($cidade['codCidades'] == $pessoa['codCidades']) { echo "SELECTED"; } else { echo ""; } ?>>
                            <?php echo $cidade['nome'];?></option><?php } ?>
                        </select>
                    </label>                    
                </ul>
                <fieldset>
                    <input class="btn" type="hidden" name="codPessoa" value="<?=$pessoa['codPessoas']?>" /> 
                    <input class="btn" type="submit" value="Alterar" name="salvar" />                                     
                </fieldset>
            </fieldset>            
        </form>   
    </center>
</body>
</html>