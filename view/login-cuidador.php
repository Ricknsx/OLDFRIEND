<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/login.css">
    <title>Login OldFriend</title>
</head>
    <body>
        <header>
            <?php include('header.php')?>
        </header>
        
        <section class="corpo-Login">

            <form action="" method="" class="formulario-Login">
            <legend><b>LOGIN</b></legend>
                <div>
                    <strong>USUARIO</strong><input type="text" name="loginCliente" class="txLogin"/>
                </div>
                
                <div>
                    <strong>SENHA</strong><input type="password" name="senhaCliente" class="txLogin"/>
                </div>
                    <input type="submit" value="Login" class="btnEnviarLogin"/>    
                    <div>
                        <a href="#">Esqueci minha senha</a>
                    </div>    
            </form>

            <div class="margin-button">
                <legend class="cadastre-se"><b>CADASTRE-SE</b></legend>
                <button class="btn-cadastro-cliente"><b>CADASTRAR COMO CLIENTE</b><p>Forneca algumas informacoes, para efetuar<br>buscas por um profissional adequado a suas<br>necessidades</p></button>
                <button class="btn-cadastro-cuidador"><b>CADASTRAR COMO CUIDADOR</b><p>Forneca algumas informacoes, curriculo e afins<br>para oferecer seus servicos e ser <b>contatado</b><br>por eventuais procuras do seu servico</p></button>
            </div>
        
        </section>


        <footer>
            <?php include('footer.php')?>
        </footer>    
    </body>
</html>