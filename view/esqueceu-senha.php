<?php include('header.php'); ?>

    <body>

    

        <section class="conteudo">
        <div class='cont-sobre'>
            <form method="post" action="../recuperar-senha/enviar-email.php">
                
                <div>
                    <h2>Recuperacao de senha</h2>
                </div>

                <div class="obs">
                    <p>OBS: Insira seu nome e email que foi cadastrado no site para receber sua senha devolta pelo email cadastrado, caso o email nao chegue procure na caixa de Spam</p>
                </div>
                <div class='form-senha'>
                <div>
                    <input class="inserir-dado" placeholder="Nome" type="text" name="txNome" require/>
                </div>    
                
                <div>
                    <input class="inserir-dado" placeholder="E-mail" type="email" name="txEmail" require/>
                </div>      

                <div>
                    <input class="btnEnviarDuvida" type="submit" value="Enviar" />
                </div>                
                </div>
            
            </form>
        </div>
        </section>
        
    </body>
<?php include('footer.php'); ?>