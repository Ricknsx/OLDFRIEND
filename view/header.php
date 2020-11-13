<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
    <link type="text/css" rel="stylesheet" href="../css/style.css"  />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <title>Old Friend</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
        $(function(){
        $(".button-collapse").sideNav()
        });
    </script>

    <header>
    <nav class= "header">
    <div class="nav-wrapper">
        <a href="../index.php" class="brand-logo"><div class="logoHeader"></div></a>
        <a href="../index.php" data-activates="menu-mobile" class="button-collapse">
        <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">

            <li><a class="button-consulta" href="consulta.php"><p>Consulta</p></a></>
            <li><a class="button-contato" href="contato.php"><p>Contato</p></a></li>
            <li><a class="button-login" href="login-cuidador.php"><p>Login (cuidador)</p></a></li>
            <li><a class="button-login" href="painel.php"><p>meu curriculo</p></a></li>
            <li><a class="button-cadastro" href="cadastro-cuidador.php"><p>Cadastre-se aqui</p></a></li>
            <!--<div>
                <button class="b-login-cliente" style="display: none;">Login como cliente</button>
                <button class="b-login-cuidador" style="display: none;">Login como cuidador</button>
            </div>
            <div>
                <button class="b-cadastro-cliente" style="display: none;">Cadastro como cliente</button>
                <button class="b-cadastro-cuidador" style="display: none;">Cadastro como cuidador</button>
            </div>-->
        </ul>
        <ul class="side-nav" id="menu-mobile">
            <li><a href="#">Consulta</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </div>
    </nav>
    </header>
    <!--<script>
        var button = document.querySelector(".button-login");
        var button2 = document.querySelector(".b-login-cliente");
        var button3 = document.querySelector(".b-login-cuidador");
        var button4 = document.querySelector(".button-cadastro");
        var button5 = document.querySelector(".b-cadastro-cliente");
        var button6 = document.querySelector(".b-cadastro-cuidador");

        button.onclick = function() {
        //window.open('login-cliente.php', '_blank');
        button2.style.display = "block";
        button3.style.display = "block";
        }

        button2.onclick = function(){
            window.open('login-cliente.php', '_blanck');
        }

        button3.onclick = function(){
            window.open('login-cuidador.php', '_blanck');
        }

        button4.onclick = function(){
            button5.style.display = "block";
            button6.style.display = "block";
        }

        button5.onclick = function(){
            window.open("cadastro-cliente.php", "_blanck")
        }

        button6.onclick = function(){
            window.open("cadastro-cuidador.php", "_blanck")
        }
    </script>-->
