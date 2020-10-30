
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Estoque</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
         <link rel="stylesheet" href="css/style.css"> 
    </head>
    <body>
        <form class="form" action="logar.php" method="POST">
            <div class="card">
                <div class= "card-top ">
                    <img class= "imglogin" src="img/o.png" alt=""/>
                    <h2 class = "title"> Painel de Controle</h2>
                    <p>Gerenciar Estoque</p>
                </div>
                <div class="card-group">
                    <label> Email </label>
                    <input type="email" name="email" placeholder="Informe seu email" required>
                </div>
                <div class="card-group">
                    <label> Senha </label>
                    <input type="password" name="senha" placeholder="Informe sua senha" required>
                </div>
                <div class="card-group">
                    <label> <input type="checkbox">Lembre-me </label>
                </div>
                 <div class="card-group btn">
                     <button type="submit">Entrar</button>
                     
                     
            </div>  
        </form>
    </body>
</html>
