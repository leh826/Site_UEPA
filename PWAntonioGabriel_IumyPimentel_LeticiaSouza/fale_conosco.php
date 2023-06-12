<?php
include_once 'conexao.php';

$nome = $_POST['nome'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


//envio ao banco de dados
$sql = "INSERT INTO mensagens (nome_user, tipo_assunto, mensagem) VALUES ('$nome', '$assunto', '$mensagem')";
$envio_mensagem = mysqli_query ($conn, $sql);

//teste se enviou certo e mensagem de confirmação
        if (!$conn) {
            echo ("Connection failed: ");
        }

        if ($envio_mensagem === TRUE) {
            
             echo"<script language='javascript' type='text/javascript'>
             alert('Mensagem enviada com sucesso!');window.location
             .href='fale_conosco.html';</script>";
             die();
        
            //echo "Mensagem enviada com sucesso!";
        } else {
            echo "Error no Envio: ";
        }

?>

  