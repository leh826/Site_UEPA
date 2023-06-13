<?php

include_once 'conexao.php';

$sql = "SELECT id_user, nome_user, tipo_assunto, mensagem FROM mensagens";
$result = mysqli_query ($conn, $sql);

?>

<!DOCTYPE>
<html>
    <hear>
        <meta charset="UTF-8">
        <title>Caixa de Mensagens</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/valida.js" type="text/javascript"></script>
    </hear>
    
    <body>
        
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
        
        <script src="../PW2_AntonioGabriel_IumyPimentel_LeticiaJuliana/js/valida.js"></script>
    </body>
</html>
