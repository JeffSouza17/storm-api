<?php 
    header("Access-Control-Allow-Origin: *");
    echo "Olá, eu sou uma API";


    include("conexao.php");


    $minhaConexao = new Conexao();
    $minhaConexao-> conectar();
?>




