<?php
if (isset ($_POST["acao"])){
     if($_POST["acao"]== "inserir") {
    inserirProduto();
  }
  if($_POST ["acao"]=="alterar") {
      alterarProduto();
  }
  if($_POST["acao"] == "excluir") {
      excluirProduto();
  }
}
function abrirBanco() {
    $conexao = new mysqli("localhost", "root", "", "estoque");
    return $conexao;
    
}
function inserirProduto() {
    $banco = abrirBanco();
    $sql = "INSERT INTO produto(nome, preco, estoque) "
            . "VALUES ('{$_POST["nome"]}','{$_POST["preco"]}','{$_POST["estoque"]}')";        
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}
function alterarProduto() {
    $banco = abrirBanco();
    $sql = "UPDATE produto SET nome= '{$_POST["nome"]}',"
        ."preco= '{$_POST["preco"]}',estoque =' {$_POST["estoque"]}' WHERE id=' {$_POST["id"]}'"  ;     
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}
function excluirProduto() {
    $banco = abrirBanco();
    $sql = "DELETE FROM produto WHERE id= '{$_POST["id"]}'";    
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectAllProduto() {
    $banco = abrirBanco();
    $sql = "SELECT * FROM produto ORDER BY nome";
    $resultado = $banco->query($sql);
      $banco->close();
    
    //separaçao linha por linhas as informações.
    while($row = mysqli_fetch_array($resultado)){
        $grupo[] = $row;
    }
    return $grupo;
}
function selectIdProduto($id) {
    $banco = abrirBanco();
    $sql = "SELECT * FROM produto WHERE id = ".$id;
    $resultado = $banco->query($sql);
    $banco->close();
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
    }


function voltarIndex(){
   header("Location:produto.php");
}
