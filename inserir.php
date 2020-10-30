<?php 

 ?>
 <meta charset="UTF-8">
 <form name="dadoPessoa" action="conexao.php" method="POST">
    <table border="1">
        
        <tbody>
            <tr>
                <td>Descrição:</td>
                <td><input type="text" name="nome" value="" /></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input type="text" name="preco" value="" /></td>
            </tr>
            <tr>
                <td>Quantidade:</td>
                <td><input type="text" name="estoque" value="" /></td>
            </tr>
            <tr>
                <td><input type="hidden" name="acao" value="inserir" /></td>
                <td><input type="submit" value="Cadastrar" name="Cadastrar" /></td>
            </tr>
        </tbody>
    </table>

</form>
