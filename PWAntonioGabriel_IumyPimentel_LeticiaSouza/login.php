<?php
include_once 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

  if (isset($email)) {

    $sql = mysqli_query($conn,"SELECT * FROM administrador WHERE email =
    '$email' AND senha = '$senha'") or die("erro ao selecionar");
    
    $quantidade = $sql->num_rows;
    
     if($quantidade == 1){
            
            $admin = $sql->fetch_assoc();
            
            if(!isset($_SESSION)){
            session_start();
            }
           
            $_SESSION['email'] = $admin['email'];
            $_SESSION['senha'] = $admin['senha'];
            
            header("Location:caixa_mensagens.php");
               
        }else{
             echo"<script language='javascript' type='text/javascript'>
             alert('Login e/ou senha incorretos');window.location
             .href='login.html';</script>";
              die();
              
            //echo "Falha de login - Email ou senha incorretos";
            //header("Location:login.html");
        }
    
  }
    
?>
