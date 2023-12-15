<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/css.css">
    <script src="../assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="../assets/js/jquery.mask.js"></script>
    <title>[EIRE]</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .menu {
            background-color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu img {
            width: 80px;
            height: auto;
        }

        .menu-btn {
            font-size: 30px;
            cursor: pointer;
            color: gray;
        }

        .container-home {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .container-home h3 {
            color: black;
            margin-bottom: 20px;
        }

        .form-label {
            color: darkgray;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .btn-submit {
            border: 1px solid green;
            color: green;
            background-color: transparent;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 30%;
            display: block;
        }

        .btn-submit:hover {
            background-color: lightgray;
            color: white;
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
    <script type="text/javascript">
        $(document).ready(function(){
            $("#cpf").mask("999.999.999-99");
        });
        $(document).ready(function(){
            $("#cep").mask("999999-999");
        });
        function duplicarCampos(){
            var clone = document.getElementById('origem').cloneNode(true);
            var destino = document.getElementById('destino');
            destino.appendChild (clone);

            var camposClonados = clone.getElementsByTagName('input');

            for(i=0; i<camposClonados.length;i++){
                camposClonados[i].value = '';
            }
        }
        function removerCampos(id){
            var node1 = document.getElementById('destino');
            node1.removeChild(node1.childNodes[0]);
        }
    </script>
</head>

<body style="background-color: #f9f9f9">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <p style="color: grey; padding-left: 30px; font-size: 18px;">Tailí Petry</p>
        <a href="sair.php">Sair</a>
    </div>

    <nav class="navbar justify-content-between menu">
        <p><img src="../images/eirezinho.png" class="img-fluid" alt="Eire"></p>
        <span class="menu-btn" onclick="openNav()">&#9776;</span>
    </nav>

       <div class="container container-home">
        <h3>Formulário <span style="color:green; font-size:16px"><b>Propriedade</b></span> </h3>
        <form method="POST" action="imprime_forms.php">
            <hr>
            <p class="sub"><b>PROPRIETÁRIO</b></p>
            <hr>
            <div class="form-group">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo">
            </div>
            <div class="form-group">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" id="cpf" name="cpf" class="form-control" placeholder="___.___.___-__">
            </div>

            <hr>
            <p class="sub"><b>PROPRIEDADE</b></p>
            <hr>

            <div class="form-group">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço">
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" id="cep" name="cep" class="form-control" placeholder="_____-___">
                </div>
                <div class="form-group col">
                    <label for="latitude" class="form-label">Latitude</label>
                    <input type="text" id="latitude" name="latitude" class="form-control" placeholder="Latitude °">
                </div>
                <div class="form-group col">
                    <label for="longitude" class="form-label">Longitude</label>
                    <input type="text" id="longitude" name="longitude" class="form-control" placeholder="Longitude °">
                </div>
            </div>

            <button type="submit" class="btn btn-submit" style="border-color:green; color:green; ">
                <svg style="cursor: pointer;" onclick="removerCampos(this);" class="bi text-success" width="20" height="20" fill="currentColor">
                    <use xlink:href="../assets/bootstrap-icons/bootstrap-icons.svg#file-earmark-post-fill"/>
                </svg>
                Gerar PDF
            </button>
            
            
        </form>
    </div>

        <br><br><br>
        <a href="javascript:history.go(-1)" class="btn btn-success" style="position: fixed; bottom: 20px; right: 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <use xlink:href="../assets/bootstrap-icons/bootstrap-icons.svg#arrow-left-circle-fill"/>
            </svg>
        </a>
       
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
                 
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
       
    </body>
</html>
