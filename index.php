<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/css.css">
    <title>[EIRE]</title>
    <style>
        body {
            background-color: #f9f9f9;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .modal-header img {
            max-width: 100%;
            height: auto;
        }
        .modal-title {
            color: #0da70d;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-outline-success {
            border-color: #0da70d;
            color: #0da70d;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="modal-header">
            <img src="images/unipampa.jpg" class="img-fluid" alt="Logo">
        </div>
        <form method="POST" action="valida.php">
            <h5 class="modal-title" style="color:black"> <img src="images/eirezinho.png" class="img-fluid" alt="Eire" style="width:150px"> <br> Exploração Integrada de Recursos Energéticos </h5>
            <div class="form-group">
                <label for="user">Usuário:</label>
                <input type="text" class="form-control" id="user" name="user">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
            <button type="submit" class="btn btn-outline-success" name="verificacao">Acessar</button>
        </form>
        <p class="text-danger">
            <?php
            if (isset($_SESSION['loginErro'])) {
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }
            ?>
        </p>
        <p>
            <?php
            if (isset($_SESSION['logindeslogado'])) {
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
