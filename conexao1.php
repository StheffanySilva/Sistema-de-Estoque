<?php

session_start();

$localhost ="localhost";
$user = "root";
$passw = "";
$banco ="estoque";

global $pdo;


try{
$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user,$passw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) { // verificar se a conexao da erro
    echo "ERRO".$e->getMessage();
    exit;

}


    


        
 ?>
