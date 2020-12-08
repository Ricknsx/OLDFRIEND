<?php require("../controller/conexao.php"); ?>
<?php include("header.php"); ?>  

<section class= "conteudo">
<div class="cont-perfil-cuidador">
<?php 
$id=  isset($_GET['id'])?$_GET['id']:"";
$sql= "select * from usuario where idusuario like '%$id%'";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

if($id !=""){
while($row= mysqli_fetch_array($consulta)){	
    
    $emailCui= $row[1];
    $nomeCui= $row[3];
    $foneCui= $row['telefone'];
    // TRATAMENTO DE IDADE					

    $from = new DateTime("$row[4]");
    $to   = new DateTime("today");       
    $idadeConvertida = $from->diff($to)->y . " anos";
?>
        <div class='info-perfil'>
        <div class='info-container'> 
            <h1 class='info-title'>Dados Pessoais</h1>
            <div class='info-pessoais'>
                <div class= 'foto-perfil'><img src="<?php echo $row[17]?>"></div>
                <div class= 'nome-dados'>
                    <div class='info-pessoal-nome'><?php echo $row[3];?></div>
                    <div class='info-pessoal-idadeSexo'><?php echo"$idadeConvertida  &nbsp &nbsp &nbsp Sexo: $row[5]"; ?></div>
                </div>
            </div>
        </div>
        <div class='info-container'> 
            <h1 class='info-title'>Localização</h1>
            <div class='local-cont'>
            <div class='local-text'>Bairro: <h3><?php echo"$row[9]"; ?></h3></div>
            <div class='local-text'>Cidade: <h3><?php echo"$row[8]"; ?></h3></div>
            <div class='local-text'>Estado: <h3><?php echo"$row[7]"; ?></h3></div>
            </div>
        </div>
    
        <div class='info-container'>
            <h1 class='info-title'>Informações Profissionais</h1>
            
            <h3 class='info-prof-title'>Experiências</h3>
            <div class='info-prof'> <?php echo"$row[12]"; ?></div>
            
            <h3 class='info-prof-title'> Cursos</h3>
            <div class='info-prof'><?php echo"$row[13]"; ?></div>
            
            <div class='info-prof-disp'>Disponibilidade: <h3><?php echo"$row[11]"; ?></h3></div>
        </div>
        <div class='info-container'>
            <h1 class='info-title'>Contato</h1>
            <div class='info-contato'>
            <?php 
                if($foneCui != ""){
                    echo "<p class='telefone'><strong>Telefone:</strong> $foneCui </p>";
                }
                else{
                    echo "<p class='telefone'> <strong>Telefone:</strong> Não consta</p>";
                }
            
            ?>
            <h3> Se interessou por este cuidador? Envie um email!</h3>

            <div class='atencao'><strong>Atenção:</strong> Não forneça informações pessoais antes de efetuar contato com 
            o profissional, apenas outra forma de contato(número de telefone, whatsapp etc) se neccessário!</div>
            <form action=<?php echo"../controller/enviar-email.php?emailCui=$emailCui&nomeCui=$nomeCui"?> method="post">
                <input type=text placeholder='nome' name='txNomeContato' class="txt-perfil" required/>
                <input type=email placeholder='E-mail' name='txEmailContato' class="txt-perfil" required/>
                <textarea class='mensagemContato msgbox-perfil' name='txMsgContato' maxlenght="200" required></textarea>                <input class='btn-email' type='submit'>            </form>            </div>        </div>        </div><?php           }}else{    echo"<h1>Perfil não encontrado</h1>";}?></div></section>

<?php include("footer.php"); ?>