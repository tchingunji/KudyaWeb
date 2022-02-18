<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QG - Kudya | Login </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>comida feita com amor </h3>
        <form method="post" action="#">
            <div>
                <div><label class="texto">Nome de usuario</label></div>
                <input type="text" placeholder="Nome de usuario" class="caixa_text" name="user">
            </div>
            <div>
                <div><label class="texto">Senha de usuario</label></div>
                <input type="password" placeholder="Senha de usuario" class="caixa_text" name="senha">
            </div>
            <input type="submit" value="Logar" class="btn"/>
        </form>
    </div>

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

</section>


<section class="footer">

    <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pinterest</a>
        <a href="#" class="btn">linkedin</a>
    </div>

    <h1 class="credit"> Criado por <span> EINF 4º ano </span> | Gestão de Projecto Informáticos! </h1>

</section>
<script src="script.js"></script>
</body>
</html>

<?php
if(isset($_POST["user"])||isset($_POST["senha"])){
    
    $n = $_POST["user"];
    $s = $_POST["senha"];
    if($n=="Tchingunji" && $s=="ISPTEC"){
        header('refresh: 1;home.php');
    }else{
        echo "<script>alert('Dados errado, tente novamente');</script>";
    }
}

?>