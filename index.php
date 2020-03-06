<?php

    include_once("produto.php");
    $cadastrar=new Produto();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de mercadorias</title>
</head>
<body>
<h1>Nova Mercadoria</h1>
<form method="post" action="<?php echo $cadastrar->novoProduto();?>">

    Descricão: <input type="text" name="descricao" required><br><br>
    Preço: <input type="text" name="preco" required><br><br>
    
    <input type="submit" value="cadastrar">

</form>

<a href="mercadorias.php">Estoque</a> /<a href="receber.php">Entradano estoque</a> / <a href="vender.php">Saida do Estoque</a>
    
</body>
</html>