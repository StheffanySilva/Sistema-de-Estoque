<?php  
include ("conexao.php");
       $grupo = selectAllProduto();
        //var_dump($grupo);   mostra os valores em uma var qualquer
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1><center>Teste de Software Estoque </h1>
        
        <a href="inserir.php">Adicionar Produto</a>
       
        <table width ="500" border="0">
              
            <thead>
               <tr align="center" bottom="middle"><td>
                 <td colspan="2" bgcolor ="#9999FF">Cadastro de Produtos</td><br />
                <tr>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // separacao de produto por produto
                foreach ($grupo as $produto) { ?>
      
                <tr>
                    <td><center><?=$produto["nome"]?></td>
                    <td><center><?=$produto["preco"]?></td>
                    <td><center><?=$produto["estoque"]?></td>
                    <td>
                        <form name="alterar" action="alterar.php" method="POST"><center>
                            <input type="hidden" name="id" value=<?=$produto["id"]?> />
                            <input type="submit" value="Editar" name="editar" />
                        </form>
                    </td>
                    <td>
                        <form name="excluir" action="produto.php" method="POST"><center>
                            <input type="hidden" name="id" value="<?=$produto["id"]?>" />
                            <input type="hidden" name="acao" value="excluir" />
                            <input type="submit" value="Excluir" name="excluir" />
                            </form>
                    </td>
                    </tr>
                 <?php  }
                ?>
            </tbody>
        </table>
        <button onclick="window.location.href='gerarPDF.php';">
      Gerar PDF
    </button>
    </body>
</html>
