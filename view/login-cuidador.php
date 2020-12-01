<?php include('header.php')?>

        <section class="conteudo">

            <div class='cont-login-cad'>
                <div class='cont-login'>
                <form action="../controller/login.php" method="POST" class="formulario-Login" style="height:300px;">
                
                    <legend><b>LOGIN</b></legend>

                        <div>
                            <strong>USUÁRIO</strong><input type="text" name="loginCliente" class="txLogin" required/>
                        </div>

                        <div>
                            <strong>SENHA</strong><input type="password" name="senhaCliente" class="txLogin" required/>
                        </div>
                            <input type="submit" value="Login" class="btnEnviarLogin"/>
                        <div>
                            <a href="esqueceu-senha.php">Esqueci minha senha</a>
                        </div>

                </form>
                </div>
           

            <div class="margin-button">
                <legend class="cadastre-se"><b>CADASTRE-SE</b></legend>
                <a href="cadastro-cuidador.php"><button class="btn-cadastro-cuidador"><p style="font-size: 12px;"><b>CADASTRE SEU CURRICULO</b></br>Forneça algumas informações, currículo e afins para oferecer seus serviços e ser <b>contatado</b> por eventuais procuras do seu perfil.</p></button></a>
            </div>
            </div>
        </section>

<?php include('footer.php')?>
