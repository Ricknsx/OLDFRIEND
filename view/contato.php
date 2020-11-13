<?php include("header.php")?>
    <section class ="conteudo">

        <div class="duvidas">
        <figcaption>
				<h2> Duvidas Frequentes </h2>
		</figcaption>
                <button id="duvida1" class="btnDuvida"><h4>É pago </h4></button><br>
                <button id="duvida2" class="btnDuvida"><h4>A comunicacao e confiavel ::after</h4></button><br>
                <button id="duvida3" class="btnDuvida"><h4>Como funciona o processo</h4></button><br>
                <button id="duvida4" class="btnDuvida"><h4>Quais são os benefícios</h4></button><br>
                <button id="duvida5" class="btnDuvida"><h4>Dificuldades em achar oque procura</h4></button>
        </div>

            <form class="formulario-contato" method="post" action="../controller/email.php">
                <legend><strong>Sua duvida ainda persiste? Contate-nos!</strong></legend>
                    <h5><strong>Nome</strong></h5><input type="text" name="txNomeContato" class="nomeContato"/>
                    <h5><strong>E-mail</strong></h5><input type="email" name="txEmailContato" class="emailContato"/>
                    <h5><strong>Mensagem</strong><h5><br><textarea name="txMensagemContato" maxlenght="200" class="mensagemContato"></textarea>
                    <input type="submit" placeholder="Enviar" name="enviarDuvida" class="btnEnviarDuvida"/>
            </form>
            <!--<div class="contato2">
                <h5><b>oldfriendsuporte@gmail.com.br (11) 4002-8922</b></h5>
            </div>-->
    </section>

    <script>
        var button1 = document.getElementById('duvida1');

        button1.addEventListener('click',function(){
            alert("hello world")
        })
    </script>
<?php include("footer.php")?>
