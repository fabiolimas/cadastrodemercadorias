<?php

    $servername="mysql:dbname=loja;host=localhost";
    $user="root";
    $pass="";

    try {
        $conn=new PDO($servername, $user, $pass);
    } catch (PDOException $e) {
        echo "Erro: ".$e->getMessage();
    }

?>