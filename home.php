<?php 
    session_start();
    
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])  == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.html');
    }
    $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="tubaraologo.ico" type="image/x-icon">
    <title> SITE | FORM SHARK </title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color:#005a9e;
            text-align: center;
            color: aliceblue;
        }
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.6);
            padding: 30px;
            border-radius: 15px;
        }
        a {
            text-decoration: none;
            color: aliceblue;
            border: 3px solid #005a9e;
            border-radius: 15px;
            padding: 10px;
        }
        a:hover {
            background-color: #005a9e;
        }
        .elemento a {
            font-family: Arial, Helvetica, sans-serif;
            color: aliceblue;
            position: absolute;
            top: 10px; /* Distância do topo */
            left: 10px; /* Distância da esquerda */
            background-color: rgb(192, 50, 50);
            border: none;
            border-radius: 5px;
            padding: 5px; /* Pequeno padding ao redor do botão */
            width: 50px;
        }
        .logo {
            text-align: center; /* Centraliza o logotipo */
            margin-bottom: 20px; /* Espaçamento abaixo do logotipo */
        }
    </style>
</head>
<body>
    <h1>FORM SHARK</h1>
    <h2>Sejam Bem-vindos</h2>
    <div class="logo">
        <img src="tubaraologo.png" alt="Logotipo" style="max-width: 8%; height: auto;">
    </div>
    <div class="box">
        <a href="Fardamento.php">Formulario</a>
        <a href="Feedback.php">Feedback</a>
    </div>
    <div class="elemento">
        <a href="sair.php" class="btn btn-danger me-5"> Sair </a>
    </div>
</body>
</html>
