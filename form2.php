<?php

if(isset($_POST["submit"]))
{
    include_once("config.php");
    $nm_prod = $_POST["nm_prod"];
    $descricao = $_POST["descricao"];
    $marca = $_POST["marca"];
    $tipo = $_POST["tipo"];
    $preço_venda = $_POST["preço_venda"];
    $qntd_estq = $_POST["qntd_estq"];

    $response = mysqli_query($conexao, "INSERT INTO produto_otico(nm_prod,descricao,marca,tipo,preço_venda,qntd_estq) VALUES('$nm_prod', '$descricao', '$marca', '$tipo', '$preço_venda', '$qntd_estq')");
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE PRODUTOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form2">
    <form action="form2.php" method="post">
        <h3>CADASTRO DE PRODUTOS</h3> <br>

        <label for="nm_prod">Nome</label>
        <input type="text" name="nm_prod" id="nm_prod" placeholder="Digite o nome do produto"><br><br>

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" placeholder="digite a descrição do produto"><br><br>

        <label for="marca">Marca do produto</label>
        <input type="text" name="marca" id="marca" placeholder="Digite a marca do produto"><br><br>

        <label for="tipo">Tipo de produto</label>
        <input type="text" name="tipo" id="tipo" placeholder="digite o tipo do produto"><br><br>

        <label for="preço_venda">Preço de venda</label>
        <input type="text" name="preço_venda" id="preço_venda" placeholder="digite o preço da venda"><br><br>

        <label for="qntd_estq">Quantidade em estoque</label>
        <input type="text" name="qntd_estq" id="qntd_estq" placeholder="digite a quantidade em estoque"><br><br>

        <input type="submit" name="submit" id="submit">
    </form>
</div>
</body>
</html>