<?php

if(isset($_POST["submit"]))
{
    include_once("config.php");
    $nome = $_POST["nome"];
    $datnasc = $_POST["dtnasc"];
    $gen = $_POST["gen"];
    $end = $_POST["end"];
    $numtel = $_POST["numtel"];
    $email = $_POST["email"];

    $response = mysqli_query($conexao, "INSERT INTO cliente(nome,dtnasc,gen,endereco,numtel,email) VALUES('$nome', '$datnasc', '$gen', '$end', '$numtel', '$email')");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE CLIENTE</title>
    
</head>
<body >
    <div class="form1">
    <form action="form1.php" method="post">
        <strong><h3>CADASTRO</h3></strong>
            

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome"> <br><br>
        
        <label for="dtnasc">data de nascimento</label>
        <input type="date" name="dtnasc" id="dtnasc"> <br><br>
        
        <label for="gen">gênero</label>
        <input type="text" name="gen" id="gen" placeholder="DIgite seu gênero"><br><br>
        
        <label for="end">endereço</label>
        <input type="text" name="end" id="end" placeholder="DIgite seu endereço"> <br><br>
        
        <label for="numtel">numero de telefone</label>
        <input type="text" name="numtel" id="numtel" placeholder="DIgite seu telefone"><br><br>

        <label for="email">email</label>
        <input type="email" name="email" id="email" placeholder="DIgite seu email" ><br><br>

        <input type="submit" name="submit" id="submit">

    </form>
</div>
</body>
</html>