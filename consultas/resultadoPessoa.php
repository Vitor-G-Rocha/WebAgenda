<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultado</title>
        <link rel="shortcut icon" href="../Img/agenda.ico">        
        <link rel="stylesheet" type="text/css" href="../menu.css">          
    </head>
    <body>
        <?php
        require("../funcoes/funcoes.php");

        $consultar = $_POST['parametro'];   
        $name = $_POST['parametro'];
        
        if (empty($consultar)) { // exibi todos os resultados
            $sqlcommand = "SELECT p.codPessoas, p.nome, p.email, p.dtNascimento, p.telCelular, p.endereco, p.telFixo, p.cep, p.bairro, c.nome AS cidade FROM pessoas p JOIN cidades c ON p.codCidades = c.codCidades";
        } else { //exibi resultados com o parâmetro que foi informado
            $consultar .= "%";
            $consultar = "%" . $consultar;
            $sqlcommand = "SELECT p.codPessoas, p.nome, p.email, p.dtNascimento, p.telCelular, p.endereco, p.telFixo,p.cep, p.bairro, c.nome AS cidade FROM pessoas p JOIN cidades c ON p.codCidades = c.codCidades WHERE UPPER(p.nome) LIKE UPPER('$consultar')";
        }

        $resultadosql = mysql_query($sqlcommand);
        $itens = "";
        $arrayPessoas = array(); //lista

        while ($itens = mysql_fetch_assoc($resultadosql)) {
            array_push($arrayPessoas, $itens);
        }
        ?>     
        <div id='cssmenu'>
            <ul>
                <li class='active'><a href='../index.php'>Home</a></li>
                <li><a href='../formularios/cadastrarPessoa.php'>Cadastrar Pessoa</a></li>                                
            </ul>
        </div> 
        <br>
        <table align="center" border="1" class="tablecss" style="background-color: white">
            <tr>
                <td>Código</td>           
                <td>Nome</td>           
                <td>Data Nascimento</td>
                <td>E-mail</td>
                <td>Tel.Fixo</td>
                <td>Tel.Celular</td>
                <td>Rua</td>
                <td>Bairro</td>
                <td>Cep</td>
                <td>Cidade</td>
                <td>Editar<br></td>
                <td>Remover<br></td>
            </tr>        
            <?php            
            if (count($arrayPessoas) > 0) {
                foreach ($arrayPessoas as $pessoa) {
                    echo "<tr>";
                    echo "<td align=\"center\">" . $pessoa['codPessoas'] . "</td>";
                    echo "<td>" . $pessoa['nome'] . "</td>";
                    echo "<td align=\"center\">" . implode("/", array_reverse(explode("-", $pessoa['dtNascimento']))) . "</td>";
                    echo "<td>" . $pessoa['email'] . "</td>";
                    echo "<td align=\"center\">" . $pessoa['telFixo'] . "</td>";
                    echo "<td align=\"center\">" . $pessoa['telCelular'] . "</td>";
                    echo "<td>" . $pessoa['endereco'] . "</td>";
                    echo "<td>" . $pessoa['bairro'] . "</td>";
                    echo "<td>" . $pessoa['cep'] . "</td>";
                    echo "<td>" . $pessoa['cidade'] . "</td>";
                    echo "<td><a href='../formularios/alterarPessoa.php?codigo={$pessoa['codPessoas']}'><img class='center' src='../Img/editar.png' style='width: 30px; height: 30px'/></a></td>";
                    echo "<td><a href='../formularios/excluirPessoa.php?codigo={$pessoa['codPessoas']}'><img class='center' src='../Img/remover.png' style='width: 30px; height: 30px'/></a></td>";
                    echo "</tr>";
                }
            }else {
                echo "<tr>";
                echo '<td colspan="12" align="center"><b>Não existe contatos a exibir com esse nome |<font color="red" style="text-transform: uppercase">' .$name. '</font>|. Clique aqui [<a href="../formularios/cadastrarPessoa.php" class="btn">Cadastrar</a>] para cadastrar, ou aqui [<a href="../consultas/consultarPessoa.php" class="btn">Consultar</a>] para consultar.</b></td>';                
                echo "</tr>";
            }
            ?>           
        </table>     
    </body>
</html>   



