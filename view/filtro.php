<?php 
    
        $est = isset($_GET['estado'])?$_GET['estado']:"";
        $sex = isset($_GET['sex'])?$_GET['sex']:"";
        $cid = isset($_GET['cidade'])?$_GET['cidade']:"";
        $bar = isset($_GET['bar'])?$_GET['bar']:"";
        
        $sql= "select * from tcuidador where estado like '%$est%'";

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
    
    <div class="col-sm-3 my-1">
    <div class="input-group">
    <div class="input-group-prepend">
    <div class="input-group-text">Estado</div>
    </div>
    <select class="custom-select mr-sm-2" name="estado" id="estados">
        <option>Selecione...</option>
        <?php
            $select = $conn->prepare("SELECT * FROM estados ORDER BY nome ASC");
            $select->execute();
            $fetchAll = $select->fetchAll();
            foreach($fetchAll as $estados)
            {
                echo '<option value="'.$estados['id'].'">'.$estados['nome'].'</option>';
            }
        ?>
    </select>
    </div>
    </div>
        
    <div class="col-sm-3 my-1">
    <div class="input-group">
    <div class="input-group-prepend">
    <div class="input-group-text">Cidade</div>
    </div>
        <select  class="custom-select mr-sm-2" id="cidades" style="display:none" name="cidade">
            <option>Selecione...</option>
        </select>
    </div>
    </div>

    <div class="col-sm-3 my-1">
    <div class="input-group">
    <div class="input-group-prepend">
    <div class="input-group-text">Sexo</div>
    </div>
        <select  class="custom-select mr-sm-2" name="sex">
            <option>Selecione...</option>
            <option>Masculino</option>
            <option>Feminino</option>
        </select>
    </div>
    </div>

    <input type="submit" value="Pesquisar">
    <input type="submit" value="Limpar">
</form>
        
