<?php include("header.php")?>
    <section class ="conteudo">

        <div class="duvidas cont-duvida">
            
            <figcaption>
    				<h2> Duvidas Frequentes </h2>
    		</figcaption>

            <div class="drop-menu">
                <button onclick="show_hide()" class="btnDuvida"><h4>Tem alguma coisa paga por aqui? </h4></button><br>
                    <div style="display: none;" id="drop-duvida">
                        <p>Não! Nada no OldFriend é pago, procure por seu cuidador ou cadastre seu currículo aqui gratuitamente.</p>
                    </div>
            </div>

            <div class="drop-menu">
                <button onclick="show_hide2()" class="btnDuvida"><h4>Eu preciso me cadastrar para buscar um cuidador? </h4></button><br>
                    <div style="display: none;" id="drop-duvida2">
                        <p>Não! O cadastro apenas serve para o cuidador que queira cadastrar o seu perfil/currículo no site.</p>
                    </div>
            </div>

            <div class="drop-menu">
                <button onclick="show_hide3()" class="btnDuvida"><h4>Como eu busco um cuidador da minha região? </h4></button><br>
                    <div style="display: none;" id="drop-duvida3">
                        <p>Simples! Na aba "Consulta" você econtrará as opções de filtro para sua busca,
                        basta inserir os filtros de acordo com as informções próximas a sua regiao e de sua preferencia!</p>
                    </div>
            </div>

            <div class="drop-menu">
                <button onclick="show_hide4()" class="btnDuvida"><h4>Não aparece nenhum cuidador quando eu busco
                 com as informações que necessito, e agora? </h4></button><br>
                    <div style="display: none;" id="drop-duvida4">
                        <p>Isso pode ser normal, deve ser porque não há nenhum profissional
                         cadastrado na região em que você forneceu, mas se mesmo assim o problema persistir
                         com outras informações filtradas, nos mande uma mensagem detalhadamente do problema
                          aqui do lado =></p>
                    </div>
            </div>

            <div class="drop-menu">
                <button onclick="show_hide5()" class="btnDuvida"><h4>Eu consigo cadastrar meu currículo sem ter um cadastro? </h4></button><br>
                    <div style="display: none;" id="drop-duvida5">
                        <p>Não! precisamos dos dados do cuidador para que além do currículo estar disponível, também ter
                         informações um pouco mais detalhadas para a o cliente encontrá-lo com mais facilidade.</p>
                    </div>
            </div>
            
        </div>    
                
            <form class="formulario-contato" method="post" action="../controller/email.php">

                <legend><strong>Sua duvida ainda persiste? Contate-nos!</strong></legend>
                    
                    <h5><strong>Nome</strong></h5><input type="text" name="txNomeContato" class="nomeContato"/>
                    <h5><strong>E-mail</strong></h5><input type="email" name="txEmailContato" class="emailContato" required/>
                    <h5><strong>Mensagem</strong><h5><br><textarea name="txMensagemContato" class="mensagemContato" rows="10" maxlength="4999" required></textarea>
                
                <input type="submit" placeholder="Enviar" value="enviar duvida!" name="enviarDuvida" class="btnEnviarDuvida"/>
            
            </form>
            
    </section>

    <script>
        function show_hide() {
            var click = document.getElementById("drop-duvida");
            if(click.style.display ==="none"){
                click.style.display = "block"
            }else{
                click.style.display = "none";
            }
        }

        function show_hide2() {
            var click = document.getElementById("drop-duvida2");
            if(click.style.display ==="none"){
                click.style.display = "block"
            }else{
                click.style.display = "none";
            }
        }

        function show_hide3() {
            var click = document.getElementById("drop-duvida3");
            if(click.style.display ==="none"){
                click.style.display = "block"
            }else{
                click.style.display = "none";
            }
        }

        function show_hide4() {
            var click = document.getElementById("drop-duvida4");
            if(click.style.display ==="none"){
                click.style.display = "block"
            }else{
                click.style.display = "none";
            }
        }

        function show_hide5() {
            var click = document.getElementById("drop-duvida5");
            if(click.style.display ==="none"){
                click.style.display = "block"
            }else{
                click.style.display = "none";
            }
        }

        function show_hide6() {
            var click = document.getElementById("drop-duvida6");
            if(click.style.display ==="none"){
                click.style.display = "block"
            }else{
                click.style.display = "none";
            }
        }

    </script>
<?php include("footer.php")?>
