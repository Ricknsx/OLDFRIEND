<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Enviar Senha </title>
</head>
    <body>

        <style type="text/css">
            .obs{
                border: solid 1px black;
                border-radius: 10px;
                margin-bottom: 10px;
                padding: 5px;
            }

            .section-recupera-senha{
                margin: 0 auto;
                width:80%;
                background-color:rgb(121, 187, 187);
                padding: 3%;
                border-radius:50px;
                box-shadow: 5px 10px #999999;
            }

            .inserir-dado{
                margin-bottom: 3%;
                border-radius:20px;
                height:30px;
            }

            .btnEnviarDados{
                height: 30px;
                width: 100px;
                border-radius:50px;
            }

        </style>

        <section class="section-recupera-senha">

            <form method="post" action="../recuperar-senha/enviar-email.php">
                
                <div>
                    <h2>Recuperacao de senha</h2>
                </div>

                <div class="obs">
                    <p>OBS: Insira seu nome e email que foi cadastrado no site para receber sua senha devolta pelo email cadastrado, caso o email nao chegue procure na caixa de Spam</p>
                </div>

                <div>
                    <input class="inserir-dado" placeholder="Nome" type="text" name="txNome" require/>
                </div>    
                
                <div>
                    <input class="inserir-dado" placeholder="E-mail" type="email" name="txEmail" require/>
                </div>      

                <div>
                    <input class="btnEnviarDados" type="submit" value="Enviar" />
                </div>                
            
            </form>
        
        </section>
        
    </body>
</html>