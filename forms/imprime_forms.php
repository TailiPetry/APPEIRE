<?php
require "../assets/mpdf/autoload.php";

$nome  = @$_POST['nome']; 
$cpf  = @$_POST['cpf']; 
$endereco = @$_POST['endereco'];
$cep = @$_POST['cep'];
$latitude  = @$_POST['latitude'];
$longitude  = @$_POST['longitude']; 

$texto = "
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
        }
        h3 {
            color: black;
        }
        .sub {
            font-size: 12px;
            font-weight: bold;
        }
        label {
            font-weight: bold;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 10px -10px;
        }
        .col {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <img src='../images/cabecalho.jpg' style='max-width: 100%;'>
        <h3>FORMULÁRIO <span style='color:green; font-size:16px'><b>Propriedade</b></span></h3>
        <form class='col-md-10'>
            <hr>
            <p class='sub'><b>DADOS DO PROPRIETÁRIO</b></p>
            <hr>
            <div class='row'>
                <div class='col-9'>
                    <label>Nome Completo:</label>
                    $nome
                </div>
                <div class='col'>
                    <label>CPF:</label>
                    $cpf
                </div>
            </div>
            <br>
            <hr>
            <p class='sub'><b>DADOS DA PROPRIEDADE</b></p>
            <hr>
            <label>Endereço:</label>
            $endereco
            <div class='row'>
                <div class='col'>
                    <label>Cep:</label>
                    $cep
                </div>
                <div class='col'>
                    <label>Latitude:</label>
                    $latitude<br>
                </div>
                <div class='col'>
                    <label>Longitude:</label>
                    $longitude<br>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
";

$mpdf = new \Mpdf\Mpdf();
$mpdf->SetTitle("Formulário Propriedade");
$mpdf->WriteHTML($texto);

$mpdf->Output("formulario_propriedade.pdf", "I");
?>
