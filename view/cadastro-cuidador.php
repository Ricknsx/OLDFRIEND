<?php include('header.php')?>

    <section class="conteudo">
        <form action="../controller/inserir-cuidador.php" method="POST" class="formulario-cadastro-cuidador">

            <p style="font-style:italic;"><b>DADOS PARA LOGIN</b></p>
            <div style="background-color:black; height: 2px;"></div>

                <div class="input-cadastro">
                    <input type="email" placeholder="E-MAIL" class="cor-preta" name="txEmailCuidador" required/>
                </div>

                <div class="input-cadastro">
                    <input type="password" placeholder="SENHA" class="cor-preta" name="txSenhaCuidador" required/>
                </div>

                <p style="font-style:italic;"><b>INFORMACOES COMPLEMENTARES</b></p>
                <div style="background-color:black; height: 2px;"></div>

                    <div class="input-cadastro">
                        <input type="text" placeholder="NOME COMPLETO" class="cor-preta" name="txNomeCuidador" required/>
                    </div>

                    <div class="input-cadastro">
                        <input type="date" placeholder="" name="txIdadeCuidador" required/>
                    </div>

                    <div class="input-cadastro" style="margin-right: 6%;">
                        <input type="text" placeholder="TELEFONE" class="cor-preta" name="txTelCuidador" required>
                    </div>

                <div class="input-group mb-3 select-cadastro" >

                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Sexo</label>
                    </div>

                    <select class="custom-select" id="inputGroupSelect01" name="txSexoCuidador">
                        <option value="">selecione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>

                </div>

                <div class="input-group mb-3 select-cadastro">

                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Disponibilidade</label>
                    </div>

                    <select class="custom-select " id="inputGroupSelect02" name="txDispCuidador" required>
                        <option value="">Selecione</option>
                        <option value="Manha">Manha</option>
                        <option value="Tarde">Tarde</option>
                        <option value="Noite">Noite</option>
                        <option value="Manha ou tarde">Manha ou tarde</option>
                        <option value="Manha ou noite">Manha ou noite</option>
                        <option value="Tarde ou noite">Tarde ou noite</option>
                        <option value="Qualquer horario">Qualquer horario</option>
                    </select>

                </div>       

                <p style="font-style:italic;"><b>LOCALIZACAO</b></p>
                <div style="background-color:black; height: 2px;"></div>

                    <div class="input-cadastro">
                        <input type="text" placeholder="CEP" class="cor-preta" maxlenght="9" name="txCepCuidador" id="cep" required/>
                    </div>

                    <div class="input-cadastro">
                        <input type="text" placeholder="ESTADO" class="cor-preta" name="txEstadoCuidador" id="uf"/>
                    </div>

                    <div class="input-cadastro">
                        <input type="text" placeholder="CIDADE" class="cor-preta" name="txCidadeCuidador" id="localidade"/>
                    </div>

                    <div class="input-cadastro">
                        <input type="text" placeholder="BAIRRO" class="cor-preta" name="txBairroCuidador" id="bairro"/>
                    </div>

                <p style="font-style:italic;"><b>EXPERIENCIAS PROFISSIONAIS *OBRIGATORIO*</b></p>
                <div style="background-color:black; height: 2px;"></div>

                    <div class="text-Info-Profissional">
                        <textarea  cols="30" rows="30" name="infoProfissional" maxlenght="1000" require></textarea>
                    </div>

                    <p style="font-style:italic;"><b>CURSOS EXTRACURRICULARES</b></p>
                    <div style="background-color:black; height: 2px;"></div>

                    <div class="text-Info-Profissional">
                        <textarea name="textCursos" cols="30" rows="30" maxlenght="1000"></textarea>
                    </div>

                <div>
                    <input type="submit" value="Enviar" class="btnEnviarCadastroCliente"/>
                </div>

        </form>

    </section>

<script src="../js/apiCep.js"></script>

<?php include('footer.php')?>
