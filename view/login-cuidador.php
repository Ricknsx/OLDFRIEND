<?php include('header.php')?>

        <section class="conteudo">

            <form action="" method="" class="formulario-Login">
            <legend><b>LOGIN</b></legend>
                <div>
                    <strong>USUARIO</strong><input type="text" name="loginCliente" class="txLogin" required/>
                </div>

                <div>
                    <strong>SENHA</strong><input type="password" name="senhaCliente" class="txLogin" required/>
                </div>
                    <input type="submit" value="Login" class="btnEnviarLogin"/>
                    <div>
                        <a href="#">Esqueci minha senha</a>
                    </div>
            </form>

            <div class="margin-button">
                <legend class="cadastre-se"><b>CADASTRE-SE</b></legend>
                <!--<a href="cadastro-cliente.php"><button class="btn-cadastro-cuidador"><b>CADASTRAR COMO CLIENTE</b><p>Forneca algumas informacoes, para efetuar<br>buscas por um profissional adequado a suas<br>necessidades</p></button></a>-->
                <a href="cadastro-cuidador.php"><button class="btn-cadastro-cuidador"><b>CADASTRAR COMO CUIDADOR</b><p>Forneca algumas informacoes, curriculo e afins<br>para oferecer seus servicos e ser <b>contatado</b><br>por eventuais procuras do seu servico</p></button></a>
            </div>

        </section>



<?php include('footer.php')?>
