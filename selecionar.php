<?php
    require_once 'conexao.php';
    $con = conexao::getConexao();

    header("content-type: application/json");    
    $query  = $con->prepare("SELECT * FROM restaurentes");
    $query->execute();
    echo json_encode($query->fetchAll());

    
      

?>














































