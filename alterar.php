<?php
include ("conexao.php");
$produto = selectIdProduto($_POST["id"]);
//var_dump($produto);
?>
 <meta charset="UTF-8">
 <form name="dadoPessoa" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Descrição:</td>
                <td><input type="text" name="nome" value="<?=$produto["nome"]?>" size="20"/></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input type="text" name="preco" value="<?=$produto["preco"]?>" size="20"/></td>
            </tr>
            <tr>
                <td>Quantidade:</td>
                <td><input type="text" name="estoque" value="<?=$produto["estoque"]?>" size="20" /></td>
            </tr>
            <tr>
                <td><input type="hidden" name="acao" value="alterar" />
                    <input type="hidden" name="id" value="<?=$produto["id"]?>" />
                </td>
                
                <td><input type="submit" value="Cadastrar" name="Cadastrar" /></td>
            </tr>
        </tbody>
    </table>

</form>
