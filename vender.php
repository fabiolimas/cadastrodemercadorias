<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebimento</title>
</head>
<body>

<h1>Venda</h1>

    <form method="post" action="#">

        Mercadoria: <input type="text" name="codigo"><br>
        Quantidade: <input type="text" name="estoque"><br><br>
        <input type="submit" value="Vender">

    </form>
    <a href="index.php">Voltar</a>

    <?php
    include_once("produto.php");
    $mercadoria = new Produto();
    
    $codigo=isset($_POST['codigo'])?$_POST['codigo']:"0";
    $quantidade=isset($_POST['estoque'])?$_POST['estoque']:"0";

    $find="SELECT * FROM mercadorias where codigo=$codigo";
    $find=$conn->query($find);

    if($find->rowCount()>0){

    

    foreach ($find as $dados) {
        
        $estoque=$dados['estoque'];
        $descricao=$dados['descricao'];
        $preco=$dados['preco'];
    }
        $mercadoria->setDescricao($descricao);
        $mercadoria->setPreco($preco);
        $mercadoria->setEstoque($estoque);

        $mercadoria->venda($quantidade);
        
        $mercadoria->getEstoque();




        $merge="UPDATE mercadorias set estoque='".$mercadoria->getEstoque()."' WHERE codigo=$codigo";
        $merge=$conn->query($merge);
    }else{

    }
    
    
    
    ?>
    
</body>
</html>