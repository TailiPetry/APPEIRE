<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css.css">
    <title>[EIRE]</title>
    <style>
         body {
            background-color: #f9f9f9;
        }
        .menu {
            background-color: white;
            color: white;
            padding: 10px;
        }
        .menu img {
            width: 80px;
        }
        .menu-btn {
            font-size: 30px;
            cursor: pointer;
            color: gray;
        }
        .titulo {
            color: black;
        }
        .link-form {
            color: darkgray;
            text-decoration: none;
        }
        .link-form:hover {
            color: #0da70d;
        }
        .form-card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .form-card h3 {
            margin-bottom: 20px;
        }
        .form-card a {
            text-align: center;
            display: block;
        }
        .form-card svg {
            width: 62px;
            height: 62px;
            fill: currentColor;
        }
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 18px;
            color: gray;
            display: block;
            transition: 0.3s;
        }
        .sidenav a:hover {
            color: #ccc;
        }
        .sidenav .closebtn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <p style="color: grey; padding-left: 30px; font-size: 18px;">Tailí Petry</p>
        <a href="sair.php">Sair</a>
    </div>

 

    <nav class="navbar justify-content-between menu">
        <p><img src="images/eirezinho.png" class="img-fluid" alt="Eire"></p>
        <span class="menu-btn" onclick="openNav()">&#9776;</span>
    </nav>
    <br>
    <div class="container">
        <div class="form-card">
            <h3 class="titulo">Formulários <b>Iniciais</b></h3>
            <div class="row">
                <div class="col-md-4 text-center">
                    <a class="link-form" href="forms/form_propriedade.php">
                        <svg class="bi text-secondary" xmlns="http://www.w3.org/2000/svg" style="width:42"  fill="currentColor">
                            <use xlink:href="assets/bootstrap-icons/bootstrap-icons.svg#pencil-square"/>
                        </svg>
                        <br><br>
                        Formulário de Propriedade
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <!-- Adicione mais formulários aqui, se necessário -->
                </div>
                <div class="col-md-4 text-center">
                    <!-- Adicione mais formulários aqui, se necessário -->
                </div>
            </div>
        </div>
           <hr size="5px">
        <div class="form-card">
            <h3 class="titulo">Formulários <b>Irrigação por Inundação</b></h3>
            <div class="row">
                <div class="col-md-4 text-center">
                    <a class="link-form" href="forms/form_propriedade.php">
                        <svg class="bi text-secondary" xmlns="http://www.w3.org/2000/svg" style="width:42"  fill="currentColor">
                            <use xlink:href="assets/bootstrap-icons/bootstrap-icons.svg#pencil-square"/>
                        </svg>
                        <br><br>
                        Formulário Tubulação de Sucção
                    </a>
                </div>
             
                <div class="col-md-4 text-center">
                    <a class="link-form" href="forms/form_propriedade.php">
                        <svg class="bi text-secondary" xmlns="http://www.w3.org/2000/svg" style="width:42"  fill="currentColor">
                            <use xlink:href="assets/bootstrap-icons/bootstrap-icons.svg#pencil-square"/>
                        </svg>
                        <br><br>
                        Formulário Tubulação de Recalque
                    </a>
                </div>
                <hr>
                <div class="col-md-4 text-center">
                    <a class="link-form" href="sair.php">
                        <svg class="bi text-secondary" xmlns="http://www.w3.org/2000/svg" style="width:42"  fill="currentColor">
                            <use xlink:href="assets/bootstrap-icons/bootstrap-icons.svg#pencil-square"/>
                        </svg>
                        <br><br>
                        Formulário Bomba Centrífuga
                    </a>
                </div>
            </div>
        </div>
           <hr size="5px">
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>
</html>
