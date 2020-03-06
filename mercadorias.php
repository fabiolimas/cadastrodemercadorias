<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadorias</title>
</head>
<body>
<a href="index.php">Voltar</a>
<h1>Mercadorias</h1>

    <?php
        include_once("produto.php");
        

        $find="SELECT * FROM mercadorias limit 10";
        $find=$conn->query($find);

      
        if($find->rowCount()>0){

            foreach ($find as $dados) {
            
                $mercadoria=new Produto();



                $codigo=$dados['codigo'];
                $descricao=$dados['descricao'];
                $preco=$dados['preco'];
                $estoque=$dados['estoque'];                  
            $mercadoria->setDescricao($descricao);
            $mercadoria->setPreco($preco);
            $mercadoria->setEstoque($estoque);
        
    
    ?>
    
        <hr>
        Código: <?php echo $codigo;?><br>
        Descrição: <?php echo $mercadoria->getDescricao();?><br>
        Preço: <?php echo "R$ ".number_format($mercadoria->getPreco(),2 , ',', '.');?><br>
        Estoque: <?php echo $mercadoria->getEstoque();?><br><hr>
            <?php }}else{
                echo "Nenhuma Mercadoria Cadastrada em nosso Banco de dados";}?>
</body>
</html>