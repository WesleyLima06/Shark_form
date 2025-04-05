<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="tubaraologo.ico" type="image/x-icon">
    <title>Feedback</title>
</head>
<style>
    .main{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #005a9e;
        flex-direction: column;
    }
    .text{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 35px;
        color: #ffffff;
        margin-bottom: 30px;
    }
    .paragrafo{
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif;
        color: #cbe1fa;
        margin-bottom: 45px;
    }
    .container{
        display: flex;
        padding: 30px;
        align-items: center;
        justify-content: center;

    }
    .left-button{
        font-family: Arial, Helvetica, sans-serif;
        padding: 12px 50px;
        background: #ffffff;
        text-decoration: none;
        color: #005a9e;
        font-size: 18px;
        transition: all 0.5s;
        border-radius: 10px;
        border: none;
        width: 50vw;
        height: 50vh;
        cursor: pointer;
        box-shadow: 0px 10px 40px -12px #4391f8;
        margin: 50px;
        align-items: center;
    }
    .button{
        font-family: Arial, Helvetica, sans-serif;
        padding: 12px 50px;
        background: #ffffff;
        text-decoration: none;
        color: #005a9e;
        font-size: 18px;
        transition: all 0.5s;
        border-radius: 10px;
        border: none;
        width: 50vw;
        height: 50vh;
        cursor: pointer;
        box-shadow: 0px 10px 40px -12px #4391f8;
        margin: 50px;
        
    }
    .logo{
        text-align: center;
        margin-bottom: 20px;
    }
    @media only screen and (max-width: 950px){
    .main{
        display: flex;
        flex-direction: column;
        width: 100%;
    }
    .logotipo{
        width: 50vw;
    }
    }
@media only screen and (max-width: 600px){
    .main{
        display: flex;
        width: 100%;
        flex-direction: column;
    }
    .logotipo{
        width: 100vw;
    }
    }

</style>
<body class="main">
    <div class="logo">
        <img src="tubaraologo.png" alt="Logotipo" style="max-width: 30%; height: auto;">
    </div>
   <h1 class="text">Obrigado pelo seu Feedback.</h1>
   <p class="paragrafo"> Nossa melhora, sua satisfação :)</p>
    <div class="container">
        <div>
        <a href="home.php" class="button">Home</a>
        </div>
    </div>
    
</body>
</html>