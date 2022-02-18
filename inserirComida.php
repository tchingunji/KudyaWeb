<?php
$ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = 'comida/'; //Diretório para uploads 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir."".$new_name); //Fazer upload do arquivo
    
    require_once 'conexao.php';
    $con = conexao::getConexao();
    header('Content-Type: application/json');
    $cod = $_POST['cod'];
    $nome = $_POST['nomeComida'];
    $preco = $_POST['precoComida'];
    $preparo = $_POST['preparo'];
    $ingrediente = $_POST['ingrediente'];
    
    
    header("content-type: application/json");    
$query  = $con->prepare("INSERT INTO pratos (nomePRato,imagem,ingrediente,preparo,idRestaurante,preco) VALUES (:no,:im,:igre,:pre,:cod,:preco)");		
    $query->bindValue(":no",$nome);
    $query->bindValue(":im",$new_name);
    $query->bindValue(":igre",$ingrediente);
    $query->bindValue(":pre",	$preparo);
    $query->bindValue(":cod",$cod);
    $query->bindValue(":preco",$preco);
    $query->execute();
header('refresh: 1;home.php');  
?>















