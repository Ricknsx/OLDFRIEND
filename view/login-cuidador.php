<?php include('header.php')?>

        <section class="conteudo">

            
                <form action="../controller/login.php" method="POST" class="formulario-Login" style="height:300px;">
                
                    <legend><b>LOGIN</b></legend>

                        <div>
                            <strong>USUARIO</strong><input type="text" name="loginCliente" class="txLogin" required/>
                        </div>

                        <div>
                            <strong>SENHA</strong><input type="password" name="senhaCliente" class="txLogin" required/>
                        </div>
                            <input type="submit" value="Login" class="btnEnviarLogin"/>
                        <div>
                            <a href="esqueceu-senha.php">Esqueci minha senha</a>
                        </div>

                </form>
           

            <div class="margin-button">
                <legend class="cadastre-se"><b>CADASTRE-SE</b></legend>
                <a href="cadastro-cuidador.php"><button class="btn-cadastro-cuidador"><p style="font-size: 12px;"><b>CADASTRE SEU CURRICULO</b></br>Forneca algumas informacoes, curriculo e afins para oferecer seus servicos e ser <b>contatado</b> por eventuais procuras do seu servico.</p></button></a>
            </div>

        </section>

<?php include('footer.php')?>
