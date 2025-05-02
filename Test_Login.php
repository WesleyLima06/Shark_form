<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: '. $email);
        // print_r('Senha: '. $senha);

        $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);

            echo "<script>
            alert('Seu email ou senha estão incorretos, ou você não possui cadastro!');
            setTimeout(function() {
                window.location.href = 'index.html'; // Redireciona após o alerta
            }, 100); // Aguarda 100ms antes de redirecionar
            </script>";

            exit();
        }
        else
        {
            $_SESSION ['email'] = $email;
            $_SESSION ['senha'] = $senha;
            header('Location: home.php');
        }
    }
    else
    {
        header('Location: index.html');
    }
    
?>
