<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../css/cadastro-cliente.css">
        <title>Cadastro OldFriend</title>
    </head>
<body>
    <header><?php include('header.php')?></header>

    <section class="corpo-Login">
        <form action="" method="" class="formulario-cadastro-cliente">
            
            <legend class="titulo-localizacao">Dados para login</legend>
                <div class="tx-dados-login">
                    <input type="text" placeholder="USUARIO" name="txUsuarioCliente" "/>
                </div>
                <div class="tx-dados-login">
                    <input type="email" placeholder="E-MAIL" name="txEmailCliente" />
                </div>
                <div class="tx-dados-login">
                    <input type="password" placeholder="SENHA" name="txSenhaCliente" />
                </div>
            
            <legend class="titulo-localizacao">Informacoes basicas</legend>
                <div class="tx-dados-login">
                    <input type="text" placeholder="NOME COMPLETO" name="txNomeCliente" maxlenght="50"/>
                </div>
                <div class="date-idade">
                    <input type="date" placeholder="" name="txIdadeCliente"/>
                </div>
                <div class="select-sexo">
                    <select  name="txSexoCliente" id="">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
            <legend class="titulo-localizacao">Localizacao (obs: localizacao do Idoso)</legend>
                <div class="tx-dados-login">
                    <input type="text" placeholder="ESTADO" name="txEstadoCliente"/>
                </div>
                <div class="tx-dados-login">
                    <input type="text" placeholder="CIDADE" name="txCidadeCliente"/>
                </div>
                <div class="tx-dados-login">
                    <input type="text" placeholder="BAIRRO" name="txBairroCliente"/>
                </div>
                <div>
                    <input type="submit" value="Cadastrar" class="btnEnviarCadastroCliente"/>
                </div>
                
        </form>
    </section>
    
    <footer>
        <?php include('footer.php')?>
    </footer>
</body>
</html>