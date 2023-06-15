<?php

include_once 'conexao.php';

$sql = "SELECT id_user, nome_user, tipo_assunto, mensagem FROM mensagens";
$result = mysqli_query ($conn, $sql);

?>

<!DOCTYPE>
<html>
    <hear>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidade do Estado do Pará - Caixa de Mensagens</title>
    <link rel="icon" href="./img/Logo Curso Sem fundo.png">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/rodape.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="js/valida.js" type="text/javascript"></script>
    </hear>
    
    <body class="text-center">
        
       <header class="cabecalho">
        <div>
            <a href="./index.html"><img src="./img/Logo Curso Sem fundo.png" alt="Foto da Logo do Curso de Ciência de Dados"></a>
        </div>

        <div>
            <nav class="navegacao">
                <ul>
                    <li><a href="matrizcurricular.html" >Matriz Curricular</a></li>
                    <li><a href="sistavaliacao.html">Sistema de Avaliação</a></li>
                    <li><a href="corpodocente.html">Corpo Docente</a></li>
                    <li><a href="campus.html">Estrutura Campus</a></li>
                    <li><a href="colegiado.html">Colegiado</a></li>
                    <li><a href="nucleodocente.html">Núcleo Docente</a></li>
                    <li><a href="fale_conosco.html">Fale Conosco</a></li>
                </ul>
            </nav>
        </div>
   </header>
        
        <div class="jumbotron">
            <div class="container">

                <h1> Portal do Administrador </h1>
                <h3>Seja Bem-Vindo Adm! </h3><br>
            </div>
        </div>
        <div>
            <table class="table table-striped">
                <thead class="thead-nigth">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Mensagem</th>
                </tr>
                </thead>
                <tbody>
                
                    <?php while($dado = mysqli_fetch_array($result)) { ?> 
                <tr> 
                    <td><?php echo $dado['id_user']; ?></td>
                    <td><?php echo $dado['nome_user']; ?></td> 
                    <td><?php echo $dado['tipo_assunto']; ?></td> 
                    <td><?php echo $dado['mensagem']; ?></td>
            <?php
            } 
            ?>
                 </tbody>   
                    
            </table>
        </div>

        <footer class="footer">
            <!-- Copyright -->
            <div class="text-center p-3 text-dark">
            © 2023 Copyright:
            <h3 class="text-dark">Antônio Gabriel | Iumy Pimentel | Leticia Souza </h3>
            </div>
            <!-- Copyright -->
        </footer>
    
   <!--div class="rodape">
        <h3>Desenvolvido por &copy; Antônio Gabriel | Iumy Pimentel | Leticia Souza </h3>
   </div>-->
        
        <script src="../PW2_AntonioGabriel_IumyPimentel_LeticiaJuliana/js/valida.js"></script>
    </body>
</html>
