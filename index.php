<html>
    <head>
        <meta charset="UTF-8">
        <title>Main Page</title>
        <link rel="shortcut icon" href="Img/agenda.ico">        
        <link rel="stylesheet" type="text/css" href="menu.css">   
        <script lang='JavaScript' type='text/javascript' src="menujs.js"></script>
    </head>
    <style type="text/css">
        body{    
            background: url('Img/3d.gif') no-repeat;  
            background-color: #000;
            background-attachment: fixed;
            background-size: cover;
            background-size: 65%;
            background-position: center;     
        }
    </style>    
    <body>
        <?php
        include 'db/conexao.php';
        ?>          
        <div id='cssmenu'>
            <ul>
                <li class='active'><a href='#'>Menu</a></li>
                <li><a href='formularios/cadastrarPessoa.php'>Cadastrar Pessoa</a></li> 
                <li><a href='consultas/consultarPessoa.php'>Consultar Contato(s)</a></li> 
                <li><a href='consultas/consultarCidade.php'>Consultar Cidade(s)</a></li>   
            </ul>
        </div>        
    </body>
</html>
