<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
    <link type="text/css" rel="stylesheet" href="../css/style.css"  />
    <link type="text/css" rel="stylesheet" href="css/style.css"  />
    
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
    <nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo"><div class="logoHeader"></div></a>
        <a href="#" data-activates="menu-mobile" class="button-collapse">
        <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Consulta</a></li>
            <li><a href="view/contato.php">Contato</a></li>
            <li><a class="button-login" href="#">Login</a></li>
            <div>
                <button class="b-login-cliente" style="display: none;">Login como cliente</button>
                <button class="b-login-cuidador" style="display: none;">Login como cuidador</button>
            </div>
        </ul>
        <ul class="side-nav" id="menu-mobile">
            <li><a href="#">Consulta</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </div>
    </nav>
    </header>
    <script>
        var button = document.querySelector(".button-login");
        var button2 = document.querySelector(".b-login-cliente");
        var button3 = document.querySelector(".b-login-cuidador")
        
        button.onclick = function() {
        //window.open('login-cliente.php', '_blank');
        button2.style.display = "block";
        button3.style.display = "block";
        }

        button2.onclick = function(){
            window.open('view/login-cliente.php', '_blanck');
        }

        button3.onclick = function(){
            window.open('view/login-cuidador.php', '_blanck');
        }
    </script>