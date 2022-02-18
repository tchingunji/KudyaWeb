<?php

    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = 'images/'; //Diretório para uploads 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir."".$new_name); //Fazer upload do arquivo
    
    require_once 'conexao.php';
    $con = conexao::getConexao();
    header('Content-Type: application/json');
    $no = $_POST['nome'];
    $lo = $_POST['local'];
    $em = $_POST['email'];
    
    header("content-type: application/json");    
    $query  = $con->prepare("INSERT INTO restaurentes (nomeRes,Localizacao,email,imagem) VALUES (:nomeRestaurante,:localizacao,:email,:foto)");		
    $query->bindValue(":nomeRestaurante",$no);
    $query->bindValue(":localizacao",	$lo);
    $query->bindValue(":email",	$em);
    $query->bindValue(":foto",	$new_name);
    $query->execute();    
    header('refresh: 1;home.php');          
?>















