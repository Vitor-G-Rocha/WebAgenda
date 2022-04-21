<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultado</title>
        <link rel="shortcut icon" href="../Img/agenda.ico">        
        <link rel="stylesheet" type="text/css" href="../menu.css">   
        <script lang='JavaScript' type='text/javascript' src="../menujs.js"></script>
    </head>
    <body>
        <?php
        require("../funcoes/funcoes.php");

        $consulta = $_POST['consulta'];
        if (empty($consulta)) { // exibi todos os resultados
            $sqlcommand = "SELECT * FROM cidades";
        } else { //exibi resultados com o parâmetro que foi informado
            $consulta .= "%";
            $consulta = "%" . $consulta;
            $sqlcommand = "SELECT * FROM cidades WHERE UPPER(nome) LIKE UPPER('$consulta')";
        }

        $resultadosql = mysql_query($sqlcommand);
        $itens = "";
        $arrayCidades = array(); //lista

        while ($itens = mysql_fetch_assoc($resultadosql)) {
            array_push($arrayCidades, $itens);
        }
        ?>     
        <div id='cssmenu'>
            <ul>
                <li class='active'><a href='../index.php'>Home</a></li>
                <li><a href='../formularios/cadastrarPessoa.php'>Cadastrar Pessoa</a></li>                                
            </ul>
        </div> 
        <br>
        <table align="center" border="1" style="background-color: white">
            <tr>
                <th>Código</th>           
                <th>Nome</th>           
                <th>Data Nascimento</th>
                <th>E-mail</th>
                <th>Tel.Fixo</th>
                <th>Tel.Celular</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Editar<br><img src="../Img/editar.png" style="width: 20px; height: 20px"/></th>
                <th>Remover<br><img src="../Img/remover.png" style="width: 20px; height: 20px"/></th>
            </tr>            
        </table>        
    </body>
</html>   




