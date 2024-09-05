<?php

if(isset($_POST['submit']))
{
include_once('conexao.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$data_nasc = $_POST['data_nascimento'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$enderenco = $_POST['endereco'];


$result = mysqli_query ($conexao, "INSERT INTO usuario(nome,senha,email,telefone,sexo,data_nasc,estado,cidade,endereco)
VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$estado','$cidade','$enderenco')");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="formulari.css">

</head>

<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <legend><b>FORMULARIO CLIENTES</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome completo</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <p>Sexo:</p>
            <input type="radio" id="feminino" name="sexo" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="sexo" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" id="outro" name="sexo" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>
            <label for="data_nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br><br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>

</html>
