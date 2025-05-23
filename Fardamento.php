<?php 

if(isset($_POST['submit']))
{ 
        //print_r($_POST['nome']);
        //print_r('<br>');
        //print_r($_POST['data_nasc']);
        //print_r('<br>');
        //print_r($_POST['cpf']);
        //print_r('<br>');
        //print_r($_POST['sexo']);
        //print_r('<br>');
        //print_r($_POST['tam_camisa']);
        //print_r('<br>');
        //print_r($_POST['estado']);
        //print_r('<br>');
        //print_r($_POST['cidade']);
        //print_r('<br>');
        //print_r($_POST['endereco']);
        //print_r('<br>');
        //print_r($_POST['complemento']);
        //print_r('<br>');
        //print_r($_POST['email']);
        //print_r('<br>');
        //print_r($_POST['telefone']);
        //print_r('<br>');
        //print_r($_POST['adicional']);

        include_once('config.php');
    
        $nome = $_POST['nome'];
        $data_nasc = $_POST['data_nasc'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['sexo'];
        $tam_camisa = $_POST['tam_camisa'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $complemento = $_POST['complemento'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $adicional = $_POST['adicional'];
    
        // Inserção no banco de dados
        $result = mysqli_query($conexao, "INSERT INTO informacoes(nome,data_nasc,cpf,sexo,tam_camisa,estado,cidade,endereco,complemento,email,telefone,adicional) VALUES ('$nome','$data_nasc','$cpf','$sexo','$tam_camisa','$estado','$cidade','$endereco','$complemento','$email','$telefone','$adicional')");
    
        // Após a inserção, redireciona para a página de confirmação ou para a mesma página para evitar o reenvio ao atualizar
        header("Location: PaginaFinal.php"); 
        exit(); 
    }
?>
<?php 

session_start();
    
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])  == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}
$logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="tubaraologo.ico" type="image/x-icon">
    <title>Formulário de Atualização</title>
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

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="tel"], /* Alterado de cpf para tel */
        input[type="email"],
        select,
        textarea {
            width: 100%;
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
        }

        button[type="reset"] {
            background-color: #6c757d;
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

<form action= "Fardamento.php" method="POST">
    <div class="logo">
        <img src="tubaraologo.png" alt="Logotipo" style="max-width: 20%; height: auto;">
    </div>

    <fieldset>
        <legend>Atualização do Fardamento</legend>
        <label for="nome">Nome:</label>
        <input type="text" minlength="3" id="nome" name="nome" required placeholder="Digite seu nome - Obrigatorio" />
        
        <label for="nascimento">Data de Nascimento:</label>
        <input type="date" id="nascimento" name="data_nasc" required />
        
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" maxlength="14" name="cpf" placeholder="000.000.000-00 - Obrigatorio" oninput="mascaraCPF(this)" required />

        <script>
            function mascaraCPF(cpfField) {
                let cpf = cpfField.value.replace(/\D/g, ''); // Remove qualquer caractere não numérico
                if (cpf.length > 11) {
                    cpf = cpf.slice(0, 11);
                }

                const formattedCPF = cpf
                    .replace(/(\d{3})(\d)/, '$1.$2')
                    .replace(/(\d{3})(\d)/, '$1.$2')
                    .replace(/(\d{3})(\d)/, '$1-$2');

                cpfField.value = formattedCPF;
            }
        </script>
        
        <label for="sexo"> Sexo:</label>
        <select name="sexo" id="sexo">
            <option value="">Selecione</option>
            <option value="Masculino">MASCULINO</option>
            <option value="Feminino">FEMININO</option>
        </select>

        <label for="camisa">Tamanho da Camisa:</label>
        <input type="text" maxlength="3" id="camisa" name="tam_camisa" required placeholder="Digite o número da camisa - Obrigatorio" />
    </fieldset>

    <fieldset>
        <legend>Endereço para Entrega</legend>
        <label for="estado">Estado</label>
        <select id="estado" name="estado">
            <option value="">Selecione</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        
        <label for="cidade" id="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required placeholder="Digite a cidade - Obrigatorio" />
        
        <label for="numero_endereco">Endereço:</label>
        <input type="text" id="numero_endereco" name="endereco" required placeholder="Digite o número - Obrigatorio" />
        
        <label for="complemento_endereco">Complemento:</label>
        <input type="text" id="complemento_endereco" name="complemento" placeholder="Digite o complemento - Opcional" />
    </fieldset>

    <fieldset>
        <legend>Informações para contato</legend>
        <label for="contato_email"> Email: </label>
        <input type="email" id="contato_email" name="email" placeholder="Digite seu Email - Obrigatorio" required />

        <label for="contato_numero">Telefone:</label>
        <input type="tel" id="contato_numero" name="telefone" maxlength="15" required placeholder="(xx) xxxxx-xxxx - Obrigatorio" oninput="mascaraTelefone(this)">
    </fieldset>

    <fieldset>
        <legend>Deseja deixar alguma observação?</legend>
        <label for="msg">Mensagem:</label>
        <textarea id="msg" name="adicional" placeholder="Digite sua mensagem aqui - Opcional" maxlength="200"></textarea>
    </fieldset>

    <fieldset>
        <input type="submit" name="submit" id="submit">
        <button type="reset">Limpar o Formulário</button>
    </fieldset>
</form>

<script>
    document.getElementById('tipo_endereco').addEventListener('change', function() {
        var tipoEndereco = this.value;
        var logradouroLabel = document.getElementById('logradouro_label');

        if (tipoEndereco) {
            logradouroLabel.textContent = 'Logradouro (' + tipoEndereco + '):';
        } else {
            logradouroLabel.textContent = 'Logradouro:';
        }
    });

    // Função para aplicar máscara no telefone
    function mascaraTelefone(telefoneField) {
        var telefone = telefoneField.value.replace(/\D/g, ''); // Remove tudo que não é número
        if (telefone.length > 10) {
            telefone = telefone.slice(0, 11);
        }
        
        // Aplica a máscara
        const formattedTelefone = telefone
            .replace(/(\d{2})(\d)/, '($1) $2')
            .replace(/(\d{5})(\d)/, '$1-$2');
        
        telefoneField.value = formattedTelefone;
    }
</script>

</body>
</html>
