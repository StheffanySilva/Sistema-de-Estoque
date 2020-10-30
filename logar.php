<?php 
header("Location: produto.php");

if(isset($POST['email']) && !empty($POST['email']) && isset($POST['senha']) && !empty($POST['senha'])){
  
    require 'conexao1.php';
    require 'Usuario.php';
    
  $u= new Usuario();
  $email = addslashes($POST['email']);
  $senha = addslashes($POST['senha']);
  
  if($u->login($email, $senha) == true) {
  if(isset($_SESSION ['iduser'])) {
   header("Location: index.php");
  }
  }
}
?>
