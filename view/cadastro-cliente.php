<?php include('header.php')?>

    <section class="conteudo">
        <form action="../controller/inserir-cliente.php" method="POST" class="formulario-cadastro-cliente">
            
            <legend class="titulo-localizacao">Dados para login</legend>
                
                <div class="tx-dados-login">
                    <input type="email" placeholder="E-MAIL" name="txEmailCliente" />
                </div>
                <div class="tx-dados-login">
                    <input type="password" placeholder="SENHA" name="txSenhaCliente" />
                </div>
            
            <legend class="titulo-localizacao">Informacoes basicas</legend>
                <div class="tx-dados-login">
                    <input type="text" placeholder="NOME COMPLETO" name="txNomeCliente" maxlenght="50"/>
                </div>
                <div class="date-idade">
                    <input type="date" placeholder="" name="txIdadeCliente"/>
                </div>

                <div class="tx-dados-login">
                    <input type="text" placeholder="TELEFONE" maxleght="11" name="txTelCliente"/>
                </div>
                
                <div>
                    <select  name="txSexoCliente" id="">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
            
            <legend class="titulo-localizacao">Localizacao (obs: localizacao do Paciente)</legend>
                <div class="tx-dados-login">
                    <input type="text" placeholder="CEP" maxlenght="9" name="txCepCliente" id="cep">
                </div>
                <div class="tx-dados-login">
                    <input type="text" placeholder="ESTADO" name="txEstadoCliente" id="localidade"/>
                </div>
                <div class="tx-dados-login">
                    <input type="text" placeholder="CIDADE" name="txCidadeCliente" id="uf"/>
                </div>
                <div class="tx-dados-login">
                    <input type="text" placeholder="BAIRRO" name="txBairroCliente" id="bairro"/>
                </div>
                <div>
                    <input type="submit" value="Cadastrar" class="btnEnviarCadastroCliente"/>
                </div>
                
        </form>
    </section>
    <script src="../js/apiCep.js"></script>
 <?php include('footer.php')?>
