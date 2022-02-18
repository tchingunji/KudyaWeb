<?php
    require_once 'conexao.php';
    $con = conexao::getConexao();
    header("content-type: application/json");
    $nome=$_GET["nome"];
    $query  = $con->prepare("SELECT * FROM `restaurentes` WHERE `nomeRes` LIKE '%$nome%'");
    $query->execute();
    echo json_encode($query->fetchAll());
?>