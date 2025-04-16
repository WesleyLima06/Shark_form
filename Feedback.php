<?php 

if (isset($_POST['submit'])) {

    include_once('config.php');
    
    
    $email = $_POST['email'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    $result = mysqli_query($conexao, "INSERT INTO feedback(email,mensagem) VALUES ('$email','$mensagem')");

    header("Location: FeedbackA.php");

    exit();
}
?>
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
    <title>Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #005a9e;
            margin: 0;
            padding: 20px;
            color: #005a9e;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background: rgb(255, 255, 255);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: 1px solid #005a9e;
            border-radius: 8px;
            padding: 10px 20px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
            font-size: 1.2em;
            padding: 0 10px;
        }
        textarea {
            width: 100%;
            padding: 8px; 
            margin-bottom: 15px;
            border: 1px solid #005a9e;
            border-radius: 4px;
            font-size: 1em;
            max-width: 320px;
            max-height: 250px;
            min-width: 550px;
            min-height: 50px;
        }    
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 550px;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #005a9e;
            border-radius: 4px;
        }

        input[type="text"]::placeholder,
        textarea::placeholder {
            color: #8fa7bb;
        }

        button {
            background-color: #0077ff;
            color: rgb(255, 255, 255);
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            margin-right: 10px;
            width: 200px;
        }
        input[type="submit"] {
            background-color: #0077ff;
            color: rgb(255, 255, 255);
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            margin-right: 10px;
            width: 200px;
        }

        button[type="reset"] {
            background-color: #6c757d;
        }
        input[type="submit"]:hover {
            opacity: 0.9;
        }

        button:hover {
            opacity: 0.9;
        }

        button:active {
            background-color: #0056b3;
        }

        .logo {
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<form action="Feedback.php" method="post">
    <div class="logo">
        <img src="tubaraologo.png" alt="Logotipo" style="max-width: 20%; height: auto;">
    </div>
    <fieldset>
        <legend>Ajude a melhorar nosso site !</legend>
        <label for="email"> Email: </label>
        <input type="text" id="contato_email" name="email" class="email" placeholder="Digite seu email, caso não queira se indentificar basta coloca N/D - Obrigatorio" required />

        <label for="mensagem">Feedback:</label>
        <textarea id="mensagem" name="mensagem" placeholder="Deixe seu feedback - Obrigatorio" minlength="4" required></textarea>
    </fieldset>

    <fieldset style="display: flex; justify-content: space-between; gap: 10px;">
        <input type="submit" value="Enviar" name="submit">
        <button type="reset">Limpar</button>
    </fieldset>
</form>

</body>
</html>
