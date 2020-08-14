<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel ="stylesheet" href="../css/contato.css"/>
    <title>Contato Old friend</title>
</head>
<body>
    
    <header> <?php include("header.php")?> </header>
    <section class ="corpo-FAQ">
        <div class="titulo-faq">
            <h1><strong>Duvidas Frequentes</strong></h1>
        </div>
        
        <div class="duvidas">
            <button id="duvida1"><h4>É pago</h4></button><br>
            <button><h4>A comunicacao e confiavel</h4></button><br>
            <button><h4>Como funciona o processo</h4></button><br>
            <button><h4>Quais são os benefícios</h4></button><br>
            <button><h4>Dificuldades em achar oque procura</h4></button>
        </div>

            <form class="formulario-contato">
                <legend>KAJSKAJSKAJKSJ</legend>
                <div class="nomeContato">
                    <h5><strong>Nome</strong></h5><input type="text" name="txNomeContato"/>
                </div>
                
                <div class="emailContato">
                    <h5><strong>E-mail</strong></h5><input type="email" name="txemailContato"/>
                </div>
                
                <div class="mensagemContato">
                    <h5><strong>Mensagem</strong><h5><br><textarea name="txMensagemContato" maxlenght="200"></textarea>
                </div>
                
                <div class="enviarDuvida">
                    <input type="submit" placeholder="Enviar" name="enviarDuvida"/>
                </div>    
            </form>
    </section>
    <footer>
        <?php include("footer.php")?>
    </footer>
</body>
</html>
    <script>
        var button1 = document.getElementById('duvida1');

        button1.addEventListener('click',function(){
            alert("hello world")
        })
    </script>