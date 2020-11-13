<?php require("../controller/conexao.php"); ?>
<?php include("header.php"); ?> 
<section class="conteudo">
    
    <!-- FILTRO -->
    <section class="cont-filtro">
        
        <h1>Filtro</h1>
        <?php include("filtro.php"); ?>

    </section>

<!-- CONSTULA PERFIS -->

<div class="cont-consulta">
<?php
           
    while($row= mysqli_fetch_array($consulta)){							
    
        $nvlacesso= $row[14];  
        if ($nvlacesso == "usuario"){
            //TRATAMENTO NOME

            $nome = $row[3];
            $primeiroNome = explode(" ", $nome);

            // TRATAMENTO DE IDADE					

            $from = new DateTime("$row[4]");
            $to   = new DateTime("today");       
            $idadeConvertida = $from->diff($to)->y . " anos";
            
    
            echo"<div class='cont-perfil'>
                <h1>$row[7]</h1>
                <h1>$primeiroNome[0]</h1>
                <h2>$idadeConvertida</h2>
                <h3>$row[8]</h3>
                <h5>$row[9]</h5>
                <h6>Disponibilidade: $row[11]</h6>
                <br>
                <a class='btn-perfil' href='perfil.php?id=$row[0]'>Ver Perfil</a>
                </div>";             
        }  
    }					
?>
</div>
</section>
    <!-- PEGAR CIDADE/ESTADO -->
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