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
                <h2>Seja Bem-Vindo Adm! </h2>

            </div>
        </div>
        <div>
            <table>
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Assunto</td>
                    <td>Mensagem</td>
                </tr>
                
                    <?php while($dado = mysqli_fetch_array($result)) { ?> 
                <tr> 
                    <td><?php echo $dado['id_user']; ?></td>
                    <td><?php echo $dado['nome_user']; ?></td> 
                    <td><?php echo $dado['tipo_assunto']; ?></td> 
                    <td><?php echo $dado['mensagem']; ?></td>
            <?php
            } 
            ?>
            </table>
        </div>
        
        <script src="../PW2_AntonioGabriel_IumyPimentel_LeticiaJuliana/js/valida.js"></script>
    </body>
</html>