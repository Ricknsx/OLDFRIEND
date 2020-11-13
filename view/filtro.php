<script type="text/javascript" src="../js/jquery.js"></script>
<?php 
    
        $est = isset($_GET['estado'])?$_GET['estado']:"";
        $sex = isset($_GET['sex'])?$_GET['sex']:"";
        $cid = isset($_GET['cidade'])?$_GET['cidade']:"";
        $bar = isset($_GET['bar'])?$_GET['bar']:"";
        
        $sql= "select * from usuario where estado like '%$est%'";

        if($sex != "Selecione..." and $sex != ""){
            $sql= $sql . " and sexo like '%$sex%'";
        }

        if($cid != "Selecione..." and $cid != ""){
            $sql= $sql . " and cidade like '%$cid%'";
        }
        if($bar != "Selecione..." and $bar != ""){
            $sql= $sql . " and bairro like '%$bar%'";
        }
        $consulta = mysqli_query($conexao,$sql);
        $registros = mysqli_num_rows($consulta);
?>
<form action="" method="get">
    
    <!-- SELECT ESTADOS -->

    <div class="input-group mb-3 select-filtro">
    <div class="input-group-append">
        <label class="input-group-text" for="inputGroupSelect02">Estado</label>
    </div>
    <select class="custom-select " name="estados" id="estados" required>
    <option>Selecione...</option>
            <?php
                $select = $connFiltro->prepare("SELECT * FROM estados ORDER BY nome ASC");
                $select->execute();
                $fetchAll = $select->fetchAll();
                foreach($fetchAll as $estados)
                {
                    echo '<option value="'.$estados['id'].'">'.$estados['nome'].'</option>';
                }
            ?>
    </select>
    </div>

    <!-- SELECT CIDADES -->

    <div class="input-group mb-3 select-filtro">
    <div class="input-group-append">
        <label class="input-group-text" for="inputGroupSelect02">Cidade</label>
    </div>
    <select class="custom-select " id="cidades" style="display:none" name="cidade">
    </select>
    </div>

    <!-- SELECT SEXO -->
    
    <div class="input-group mb-3 select-filtro">
    <div class="input-group-append">
        <label class="input-group-text" for="inputGroupSelect02">Sexo</label>
    </div>
    <select class="custom-select " name="sex">
        <option>Selecione...</option>
        <option>Masculino</option>
        <option>Feminino</option>
    </select>
    </div>
    
    <input type="submit" class="btn-perfil" value="Pesquisar">
    <input type="submit" class="btn-perfil" value="Limpar">
    </form>
 