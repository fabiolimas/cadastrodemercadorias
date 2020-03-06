<?php

    include("conexao.php");
    class Produto{
        private $codigo;
        private $descricao;
        private $preco;
        private $estoque;

        function getDescricao(){
            return $this->descricao;
        }
        function setDescricao($descricao){
            if(strlen($descricao)>5){

                $this->descricao=$descricao;

            }else{
                echo "A descricao do produto deve ter mais de 5 caracteres";
            }    
            
        }
        function getCodigo(){
            return $this->codigo;
        }
        function getPreco(){
            return $this->preco;

        }
        function setPreco($preco){
            
            $this->preco=$preco;
        }

        function getEstoque(){
            return $this->estoque;
        }
        function setEstoque($estoque){
            if($estoque<0){
                echo "O Estoque não pode ficar negativo";

            }else{

                 $this->estoque=$estoque;
            }
           
        }
        function adicionaEstoque($estoque){
              return $this->getEstoque()+$this->setEstoque($this->estoque+$estoque);
         
        }

        function venda($quantidade){
                 return $this->getEstoque()+$this->setEstoque($this->estoque-$quantidade);
        }

       function novoProduto(){

                if(isset($_POST['descricao']) ==null && empty($_POST['descricao'])== true){

                }else{
                
                require("conexao.php");

                    $descricao=$_POST['descricao'];
                    $preco=$_POST['preco'];
                    $novoPagamento=str_replace(',', '.', $preco);
                
                    
                    $produto = new Produto();
                    $produto->setDescricao($descricao);
                    $produto->setPreco($novoPagamento);
                    $produto->getDescricao();
                    $produto->getPreco();

            
                $persist="INSERT INTO mercadorias (codigo, descricao, preco) VALUES (NULL, '".$produto->getDescricao()."', '".$produto->getPreco()."')";
                $persist=$conn->query($persist);
                }

       }

    }

    

   




    


  



?>