<?php include("header.php"); 
        require("../controller/conexao.php")
?>

<div clas="cont-filtro-consulta">
<div class="filtro">
    <?php include("filtro.php"); ?>
</div>

            <?php
            $mostrar= "";
            
            if($est == "" and $cid == "" and $sex == ""){
                echo "<h1>Todos</h1>";
            }
            if($est != "Selecione..." and $est != ""){
                $mostrar= $est;
                echo "<h2>$mostrar</h2>";
            }
            if($cid != "" and $cid != "Selecione..."){
                $mostrar= $mostrar." > ".$cid;
                echo "<h2>$mostrar</h2>";
            }
            if($sex != "Selecione..." and $sex != ""){
                $mostrar= $mostrar." > ".$sex;
                echo "<h2>$mostrar</h2>";
            }
            echo"<div class='cont-consulta'>";
                while($row= mysqli_fetch_array($consulta)){							
                
                    echo"<div class='cont-perfis'>
                        <h1> $row[0]</h1>
                        <h1> $row[1]</h1>
                        <h2>$row[2]</h2>
                        <h3>$row[3]</h3>
                        <h5>$row[6]</h5>
                        <h6>$row[7]</h6>
                        <a class='btn-perfil'>Ver Perfil</a>
                        </div>";               
            }					
    ?>
 
        <a class='botao' href='index.php'>Voltar</a>
</div>
    <script type="text/javascript" src="jquery.js"></script>
    <script>
    $("#estados").on("change",function(){
            
            $.ajax({
                url: 'pega_cidades.php',
                type: 'POST',
                data:{id:$("#estados").val()},
                beforeSend: function(){
                    $("#cidades").css({'display':'block'});
                    $("#cidades").html("Carregando...");
                },
                success: function(data)
                {
                    $("#cidades").css({'display':'block'});
                    $("#cidades").html(data);
                },
                error: function(data)
                {
                    $("#cidades").css({'display':'block'});
                    $("#cidades").html("Houve um erro ao carregar");
                }
            });
    });
    </script>  
<?php include("footer.php"); ?>
<?php include("footer.php"); ?>
