<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Cidades</title>
        <link rel="shortcut icon" href="../Img/agenda.ico">        
        <link rel="stylesheet" type="text/css" href="../menu.css">      
        
    </head>    
    <body>   
        <div id='cssmenu'>
            <ul>
                <li class='active'><a href='../index.php'>Home</a></li>
                <li><a href='../formularios/cadastrarPessoa.php'>Cadastrar Pessoa</a></li> 
                <li><a href='../consultas/consultarPessoa.php'>Consultar Contato</a></li>                 
            </ul>
        </div> 
        <br>
    <center>
        <form name="cadastrarCidade" action="../dao/inserirCidade.php" method="POST">            
            <fieldset class="fieldset1"><legend><b>Cadastro de Cidades</b><br><font size="2,5" color="red">*</font><font size="1" color="gray">Deverá ser preenchido</font></legend></fieldset>             
            <fieldset>                
                <ul class="input-list style-1 clearfix">                   
                    <br><b><font color="red"></font><font color="red">*</font>Cidade:</b><br><input required type="text" placeholder="Cidade" id="cidade" name="cidade" size="25" />
                    <br><b><font color="red">*</font>Estado:</b><br>
                    <label><select name="estado">
                            <option value="">Selecione...</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espirito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </label>                  
                </ul>
                <fieldset>
                    <input class="btn" type="submit" value="Salvar" name="salvar" />
                    <input class="btn" type="reset" value="Limpar" name="cancelar" />
                    <input class="btn" type="button" value="Menu Principal" name="voltar" onclick='location.href = "../index.php"'/>
                </fieldset>                
            </fieldset>            
        </form>   
    </center>
</body>
</html>

