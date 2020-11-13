<?php include("header.php")?>
    <section class ="conteudo">

        <div class="duvidas">
            
            <figcaption>
    				<h2> Duvidas Frequentes </h2>
    		</figcaption>

            <div class="drop-menu">
                <button onclick="show_hide()" class="btnDuvida"><h4>Tem alguma coisa paga por aqui? </h4></button><br>
                    <div style="display: none;" id="drop-duvida">
                        <p>Nao! nada no OldFriend e pago, pode procurar seu cuidador ou pra voce que e cuidador,
                         pode cadastrar seu curriculo aqui totalmente gratis</p>
                    </div>
            </div>

            <div class="drop-menu">
                <button onclick="show_hide2()" class="btnDuvida"><h4>Eu preciso me cadastrar para buscar um cuidador? </h4></button><br>
                    <div style="display: none;" id="drop-duvida2">
                        <p>Nao! o cadastro apenas serve para o cuidador que queira cadastrar o seu perfil/curriculo no site</p>
                    </div>
            </div>

            <div class="drop-menu">
                <button onclick="show_hide3()" class="btnDuvida"><h4>Como eu busco um cuidador da minha regiao? </h4></button><br>
                    <div style="display: none;" id="drop-duvida3">
                        <p>Simples! voce vai na aba "Consulta" e nela voce tem as opcoes de filtro para sua busca,
                        basta voce inserir os filtros de acordo com as informacoes proximas a sua regiao e de sua preferencia e claro</p>
                    </div>
            </div>

            <div class="drop-menu">
                <button onclick="show_hide4()" class="btnDuvida"><h4>Nao aparece nenhum cuidador quando eu pesquiso
                 com as informacoes que eu preciso, e agora? </h4></button><br>
                    <div style="display: none;" id="drop-duvida4">
                        <p>Isso pode ser normal, deve ser porque nao existe nenhum profissional
                         cadastrado na regiao em que voce forneceu, mas se mesmo assim o problema persistir
                         com outras informacoes filtradas, nos mande uma mensagem mais detalhado do problema
                          aqui do lado =></p>
                    </div>
            </div>

            <div class="drop-menu">
                <button onclick="show_hide5()" class="btnDuvida"><h4>Eu consigo cadastrar meu curriculo sem ter um cadastro? </h4></button><br>
                    <div style="display: none;" id="drop-duvida5">
                        <p>Nao! precisamos do cadastro do cuidador para que alem do curriculo dele estar disponivel tambem ter
                         informacoes um pouco mais detalhadas para a o cliente acha-lo com mais facilidade.</p>
                    </div>
            </div>

            <div class="drop-menu">
                <button onclick="show_hide6()" class="btnDuvida"><h4>Fiz o meu cadastro mas nao consigo fazer login </h4></button><br>
                    <div style="display: none;" id="drop-duvida6">
                        <p>Isso deve ser por causa do limite de 5000 caracteres que usamos no espaco de informacoes profissionais
                            e tambem em cursos extracurriculares, para ter uma nocao melhor do limite de 5000 CARACTERES
                            recomendamos voce usar esse site: https://www.invertexto.com/contador-caracteres. Mas ficamos impressionados
                            com o tanto de experiencia e conhecimento que voce tem! Caso o problema continue, entre em contato com a gente
                            pelo formulario aqui do lado =>
                        </p>
                    </div>
            </div>
            
        </div>    
                

            <form class="formulario-contato" method="post" action="../controller/email.php">

                <legend><strong>Sua duvida ainda persiste? Contate-nos!</strong></legend>
                    
                    <h5><strong>Nome</strong></h5><input type="text" name="txNomeContato" class="nomeContato"/>
                    <h5><strong>E-mail</strong></h5><input type="email" name="txEmailContato" class="emailContato" required/>
                    <h5><strong>Mensagem</strong><h5><br><textarea name="txMensagemContato" class="mensagemContato" rows="10" required></textarea>
                
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
