<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="tubaraologo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Tela de Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #005a9e;
        }
        .box{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 70px;
            border-radius: 15px;
            color: #00bbff;
            width: 300px;
        }
        .inputBox{
            position: relative;
        }
        .inputBox i{
            font-size: 15px;
            cursor: pointer;

            position: absolute;
            right: 5%;
        }
        
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid #00bbff;
            outline: none;
            color: white;
            width: 98%;
            font-size: 15px;
        }
        input[type="submit"]{
            background: #00bbff;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #043547;
            font-size: 15px;
            cursor: pointer;
        }
        img{
            display: block;
            margin: 0 auto 20px;
            width: 35%; 
            height: auto;
            padding: auto;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px; 
        }
        .inputUser:focus ~ .labelinput,
        .inputUser:valid ~ .labelinput{
            top: -20px;
            font-size: 13px;
            color: #00bbff;
        }
        .link {
            font-family: Arial, Helvetica, sans-serif;
            background-color: none;
            text-align: center;
        }
        .cadastro{
            color: #7bc9e6;
        }
.logotipo{
    display: block;
    width: 40vw;
    padding: 30px 120px;
}
.cadastro{
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(103, 169, 255);
}
@media only screen and (max-width: 950px){
    .card-login{
        width: 85%;
    }
    .logotipo{
        width: 60vw;
    }
}
@media only screen and (max-width: 600px){
    .main-login{
        flex-direction: column;
    }
    .left-login > h1{
        display: none;
    }
    .left-login{
        width: 100%;
        height: auto;
    }
    .right-login{
        width: 100%;
        height: auto;
    }
    .logotipo{
        width: 100vw;
    }
    .card-login{
        width: 95%;
    }
}
    </style>

</head>
<body>
    <form action="Test_Login.php" method="post">
        <section>
            <div class="box">
                <img src="tubaraologo.png" alt="Logotipo" width="80px"/>
                <h1>Login</h1>
                <br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="email" required>
                    <label for="usuario" class="labelinput">Email</label> 
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" class="inputUser" name="senha" id="senha" required>
                    <i class="bi bi-eye" id="btn-senha" onclick="mostrarSenha()" style="display:none;"></i> <!-- Ícone de olho oculto inicialmente -->
                    <label for="senha" class="labelinput">Senha</label> 
                </div>
                <script src="main.js"></script>
                <br><br>
                <div>
                    <input type="submit" name="submit" value="Entrar">
                    <br><br>
                    <div class="link"><a href="cadastroL.php" class="cadastro">Cadastrar</a></div>
                </div>
            </div>
        </section>
    </form>
</body>
