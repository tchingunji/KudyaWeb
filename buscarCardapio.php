<?php
    $id= $_GET["id"];
    require_once 'conexao.php';
    $con = conexao::getConexao();
    header("content-type: application/json");    
    $query  = $con->prepare("SELECT * FROM pratos where idRestaurante=$id");
    $query->execute();
    echo json_encode($query->fetchAll());

    
    
?>